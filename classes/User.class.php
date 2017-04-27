<?php
class User
{
    private $m_sGebruikersnaam;
    private $m_sEmail;
    private $m_sPaswoord;


    public function __set($p_sProperty, $p_vValue)
    {
        switch ($p_sProperty) {

            case "Gebruikersnaam":
                $this->m_sGebruikersnaam  = $p_vValue;
                break;

            case "Email":
                $this->m_sEmail  = $p_vValue;
                break;

            case "Paswoord":
                $this->m_sPassword  = $p_vValue;
                break;
        }
    }

    public function __get($p_sProperty)
    {
        switch ($p_sProperty) {

            case "Gebruikersnaam":
                return $this->m_sGebruikersnaam;
                break;

            case "Email":
                return $this->m_sEmail;
                break;

            case "Paswoord":
                return $this->m_sPaswoord;
                break;

        }
    }

    public function Save()
    {
        $conn= Db::getInstance();

        $statement = $conn->prepare("INSERT INTO Users (Gebruikernsaam,Email,Paswoord) VALUES (:Gebruikersnaam,:Email,:Paswoord)");
        $statement->bindValue(":Gebruikersnaam", $this->m_sGebruikersnaam);
        $statement->bindValue(":Email", $this->m_sEmail);
        $statement->bindValue(":Paswoord", $this->m_sPaswoord);

        $res = $statement->execute();

        return ($res);
    }

    public function __toString()
    {
        $output = "<p>".$this->m_sGebruikersnaam."</p>";
        $output .= "<p>".$this->m_sEmail."</p>";

        return ($output);
    }

    public static function getUsers()
    {
        $conn= Db::getInstance();
        $stmt = $conn->prepare("SELECT * FROM Users");
        $stmt->execute();

        return ($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
}
?>

