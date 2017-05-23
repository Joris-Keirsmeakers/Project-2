
// The width and height of the captured photo. We will set the
// width to the value defined here, but the height will be
// calculated based on the aspect ratio of the input stream.

var width

var height = window.innerHeight
|| document.documentElement.clientHeight
|| document.body.clientHeight;

// |streaming| indicates whether or not we're currently streaming
// video from the camera. Obviously, we start at false.

var streaming = false;

// The various HTML elements we need to configure or control. These
// will be set by the startup() function.

var video = null;
var canvas = null;
var photo = null;
var startbutton = null;

function startup() {
  console.log("starting up camera")
    video = document.getElementById('video');
    canvas = document.getElementById('canvas');
    photo = document.getElementById('photo');
    startbutton = document.getElementById('startbutton');


 navigator.getUserMedia({ audio: true, video: { width: width, height: height } },
    function(stream) {
      console.log(width);
       var video = document.querySelector('video');
       video.srcObject = stream;
       video.onloadedmetadata = function(e) {
         video.play();
       };
    },
    function(err) {
       console.log("The following error occurred: " + err.name);
    }
 );
    video.addEventListener('canplay', function(ev){
    if (!streaming) {
      width= video.videoWidth / (video.videoHeight/height);
      console.log(width);
      video.style.margin = "0 -"+width/4+"px"

      video.setAttribute('width', width);
      video.setAttribute('height', height);
      canvas.setAttribute('width', width);
      canvas.setAttribute('height', height);
      streaming = true;
    }
  }, false);


  startbutton.addEventListener('click', function(ev){
        takepicture();
        ev.preventDefault();
      }, false);

      clearphoto();
}

function clearphoto() {
  var context = canvas.getContext('2d');
  //context.fillStyle = "#AAA";
  context.fillRect(0, 0, canvas.width, canvas.height);

  var data = canvas.toDataURL('image/png');

  photo.setAttribute('src', data);
}

function takepicture() {
  var context = canvas.getContext('2d');
  if (width && height) {
    canvas.width = width;
    canvas.height = height;
    context.drawImage(video, 0, 0, width, height);

    var data = canvas.toDataURL('image/png');
    console.log("Picture taken")
    photo.setAttribute('src', data);
      $.ajax({
        type:"POST",
        url:"./ajax/camera.php",
        data:{"data" : data},
          })
          .done(function(res) {
            console.log("done")
            console.log(res);
            window.location.replace('./post_check.php')
          });

  } else {
    clearphoto();
  }
}
startup();
