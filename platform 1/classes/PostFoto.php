<?php
class Post
{
    private $m_iUserId;
    private $m_sUsername;
    
    public function __set($p_sProperty, $p_vValue)
    {
        switch ($p_sProperty) {

            case "UserId":
                $this->m_iUserId= $p_vValue;
                break;

            case "Username":
                $this->m_sUsername = $p_vValue;
                break;
        }
    }

    public function __get($p_sProperty)
    {
        switch ($p_sProperty) {

            case "UserId":
                return $this->m_iUserId;
                break;

            case "Username":
                return $this->m_sUsername;
                break;
        }
    }
}