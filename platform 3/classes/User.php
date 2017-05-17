<?php
class User
{
    private $m_sUsername;
    private $m_sMail;
    private $m_sPassword;

    public function __set($p_sProperty, $p_vValue)
    {
        switch ($p_sProperty) {

            case "Username":
                $this->m_sUsername  = $p_vValue;
                break;

            case "Mail":
                $this->m_sMail  = $p_vValue;
                break;

            case "Password":
                $this->m_sPassword  = $p_vValue;
                break;
        }
    }

    public function __get($p_sProperty)
    {
        switch ($p_sProperty) {

            case "Username":
                return $this->m_sUsername;
                break;

            case "Mail":
                return $this->m_sMail;
                break;

            case "Password":
                return $this->m_sPassword;
                break;

        }
    }

    public function Save()
    {
        $conn= Db::getInstance();

        $statement = $conn->prepare("INSERT INTO Users (Username,Mail,Password) VALUES (:Username,:Mail,:Password)");
        $statement->bindValue(":Username", $this->m_sUsername);
        $statement->bindValue(":Mail", $this->m_sMail);
        $statement->bindValue(":Password", $this->m_sPassword);

        $res = $statement->execute();

        return ($res);
    }

    public function __toString()
    {
        $output = "<p>". $this->m_sUsername."</p>";
        $output .= "<p>".$this->m_sMail."</p>";

        return ($output);
    }

    public static function getUsers()
    {
        $conn= Db::getInstance();
        $stmt = $conn->prepare("SELECT * FROM Users");
        $stmt->execute();

        return ($stmt->fetchAll(PDO::FETCH_ASSOC));
    }

    public static function getUser($Username)
    {
        $conn= Db::getInstance();
        $stmt = $conn->prepare("SELECT * FROM Users WHERE Username= :Username");
        $stmt->bindValue(':Username', $Username);
        $stmt->execute();

        return ($stmt->fetch(PDO::FETCH_ASSOC));
    }


}

