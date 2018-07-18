<?php
include_once("models/database.php");

class M_dang_ky_nhan_tin extends database
{
    public function Dang_ky_nhan_tin($tin)
    {
        $sql = "INSERT INTO CKT_DANG_KY_NHAN_TIN(EMAIL_NGUOI_NHAN) VALUES(?)";
        $this->setQuery($sql);

        $param = array($tin);
        return $this->execute($param);
    }
}


?>