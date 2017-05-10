<?php
class User
{
    private $m_sUsername;
    private $m_sMail;
    private $m_sPassword;
    private $m_sVak;

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

            case "Vak":
                $this->m_sVak  = $p_vValue;
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

            case "Vak":
                return $this->m_sVak;
                break;

        }
    }

    public function Save()
    {
        //connectie maken (PDO) -> geen mysqli, PDO kan voor meerder data banken
        $conn= Db::getInstance();

                //query schrijven
                $statement = $conn->prepare("INSERT INTO Users (Username,Mail,Password,Vak) VALUES (:username,:mail,:password,:vak)");
                $statement->bindValue(":username", $this->m_sUsername);
                $statement->bindValue(":mail", $this->m_sMail);
                $statement->bindValue(":password", $this->m_sPassword);
                $statement->bindValue(":vak", $this->m_sVak);


                //query execute
                $res = $statement->execute();

                //true or false?
                return ($res);

    }

    public static function getUsers()
    {
        $conn= Db::getInstance();
        $stmt = $conn->prepare("SELECT * FROM Users");
        $stmt->execute();

        return ($stmt->fetchAll(PDO::FETCH_ASSOC));
    }


    public static function getUser($email)
    {
        $conn= Db::getInstance();
        $stmt = $conn->prepare("SELECT * FROM Users WHERE Mail = :email");
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        return ($stmt->fetch(PDO::FETCH_ASSOC));
    }

    public function checkPassword(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM users WHERE Mail = :mail");
        $statement->bindValue(":mail", $this->Mail);

        if($statement->execute() && $statement->rowCount() != 0){
            $res = $statement->fetch(PDO::FETCH_ASSOC);

            // hier gaan we het opgeslagen wachtwoord vergelijken met het ingegeven wachtwoord
            if (password_verify($this->Password, $res['Password'])){
                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }
    }


}

