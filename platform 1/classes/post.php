<?php
class post
{
    private $m_sUserID;
    private $m_sContent;
    private $m_stype;
    private $m_sMatch

    public function __set($p_sProperty, $p_vValue)
    {
        switch ($p_sProperty) {

            case "userID":
                $this->$m_sUserID  = $p_vValue;
                break;

            case "content":
                $this->$m_sContent  = $p_vValue;
                break;

            case "type":
                $this->$m_stype  = $p_vValue;
                break;

            case "match":
                $this->$m_sMatch  = $p_vValue;
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

            case "vak":
                $this->m_sVak  = $p_vValue;
                break

            case "postamount":
                $this->m_iPostAmount  = $p_vValue;
                break;
            }
        return $vResult;

    }
