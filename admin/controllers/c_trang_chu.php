<?php
@session_start();

class C_trang_chu
{
    public function __construct()
    {
        include("models/m_trang_chu.php");
        include("controllers/Smarty_dai_ly_nuoc_ngot.php");
    }


    public function Hien_Giao_Dien()
    {
        //Model
        //View
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/trang_chu/v_trang_chu.tpl";
        $smarty->assign("view",$view);
        $smarty->display("_layoutadminchinh.tpl");

    }
}



?>