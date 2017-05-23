<?php
class Content
{
    private $m_iID;
    private $m_sContent;
    private $m_iUserID;
    private $m_sType;
    private $m_sMatch;
    private $m_iAlbumId;

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
            }
        return $vResult;

    }

    public function Save(){

        $conn = Db::getInstance();

        $statement = $conn->prepare("INSERT INTO content (id,post, user_id, match, album_id, type) VALUES (:id,:post,:userId,:match, :album_id, :type)");
        $statement->bindValue(":id", htmlspecialchars($this->m_iID));
        $statement->bindValue(":post", htmlspecialchars($this->m_sContent));
        $statement->bindValue(":user_id", htmlspecialchars($this->m_iUserID));
        $statement->bindValue(":match", htmlspecialchars($this->m_sMatch));
        $statement->bindValue(":album_id", htmlspecialchars($this->m_iAlbumId));
        $statement->bindValue(":type", htmlspecialchars($this->m_sType));

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
