<?php
class Content
{
    private $m_iID;
    private $m_sContent;
    private $m_iUserID;
    private $m_sType;
    private $m_sMatch;
    private $m_iAlbumId;
    private $m_sComment;

    public function __set($p_sProperty, $p_vValue)
    {
        switch ($p_sProperty) {

            case "ID":
                $this->m_iID = $p_vValue;
                break;

            case "content":
                $this->m_sContent = $p_vValue;
                break;

            case "userId":
                $this->m_iUserID = $p_vValue;
                break;

            case "type":
                $this->m_sType = $p_vValue;
                break;

            case "match":
                $this->m_sMatch = $p_vValue;
                break;

            case "albumID":
                $this->m_sMatch = $p_vValue;
                break;

            case "comment":
                $this->m_sComment = $m_sComment;
                break;

        }
    }

    public function __get($p_sProperty)
    {
        $vResult = null;

        switch ($p_sProperty) {

            case "ID":
                return $this->m_iID;
                break;

            case "content":
                return $this->m_sContent;
                break;

            case "userId":
                return $this->m_iUserID;
                break;

            case "type":
                return $this->m_sType;
                break;

            case "match":
                return $this->m_sMatch;
                break;

            case "albumID":
                return $this->m_iAlbumId;
                break;

            case "comment":
                return $this->m_sComment;
            }
        return $vResult;

    }

    public function Save(){

        $conn = Db::getInstance();

        $statement = $conn->prepare("INSERT INTO content (id, post, user_id, match, album_id, type, comment) VALUES (:id,:post,:userId,:match, :album_id, :type, :comment)");
        $statement->bindValue(":post", htmlspecialchars($_SESSION['lastUserContent']));
        $statement->bindValue(":user_id", htmlspecialchars($_SESSION['id']));
        $statement->bindValue(":match", "testmatch");
        $statement->bindValue(":type", "foto");
        $statement->bindValue(":comment", $this->m_sComment);

        $res = $statement->execute();

        return ($res);
    }

    public static function getPosts(){

        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM content");

        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getPostsByAlbumID($album_id){

        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM content WHERE album_id= :album_id");
        $statement->bindValue(':album_id', $album_id);

        if ($statement->execute()) {
            return ($statement->fetchAll(PDO::FETCH_ASSOC));
        } else {
            return false;
        }
    }



    }
