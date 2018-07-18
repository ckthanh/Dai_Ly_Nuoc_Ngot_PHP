<?php

include_once("database.php");


class M_user extends database
{
    //Dùng để kiểm tra
    public function Doc_User_TaiKhoan_MatKhau($tk,$mk)
    {
        $sql = "SELECT * FROM ckt_user where tai_Khoan=? && mat_Khau=?";
        $this->setQuery($sql);

        return $this->loadRow(array($tk,md5($mk)));
    }

}


?>