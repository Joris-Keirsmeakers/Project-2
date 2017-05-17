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
        $vResult = null;

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
        return $vResult;

    }

    public function Save()
    {
        //connectie maken (PDO) -> geen mysqli, PDO kan voor meerder data banken
        $conn = Db::getInstance();

        $q_alreadyExists = $conn->prepare("SELECT * FROM users WHERE Mail = :mail");
        $q_alreadyExists->bindValue(":mail", $this->m_sMail);

        $q_alreadyExists1 = $conn->prepare("SELECT username FROM users WHERE username = :username");
        $q_alreadyExists1->bindValue(":username", $this->m_sUsername);


        if ($q_alreadyExists1->execute() && $q_alreadyExists1->rowCount() != 0) {
            return false;
        } else {
            //als het mailadres bestaat geef melding dat de mail reeds in gebruik is en niet save
            if ($q_alreadyExists->execute() && $q_alreadyExists->rowCount() != 0) {
                return false;
            } else {

                //query schrijven
                $statement = $conn->prepare("INSERT INTO users (username,mail,password) VALUES (:username,:mail,:password)");
                $statement->bindValue(":username", $this->m_sUsername);
                $statement->bindValue(":mail", $this->m_sMail);
                $statement->bindValue(":password", $this->m_sPassword);

                //query execute
                $res = $statement->execute();

                //true or false?
                return ($res);

            }
        }
        }

        public
        static function getUsers()
        {
            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();

            return ($stmt->fetchAll(PDO::FETCH_ASSOC));
        }
    }
    ?>