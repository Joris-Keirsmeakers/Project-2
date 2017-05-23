photo = document.getElementById('photo');
var width = photo.clientWidth;
console.log(width)
photo.style.margin = "0 -"+width/4+"px"

photo.setAttribute("src", "./picture-posts/latest.png");

$("#camera-back").click(function(){
  window.location.replace('./create.php')
})

$("#confirm").click(function () {
  $.ajax({


  })
})
