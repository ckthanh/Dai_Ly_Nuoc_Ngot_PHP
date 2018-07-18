<?php

class C_gioi_thieu
{
    public function Hien_Giao_Dien_Gioi_Thieu()
    {
        include_once("controllers/Smarty_dai_ly_nuoc_ngot.php");
        $smarty = new Smarty_dai_ly_nuoc_ngot();
        $view = "views/gioi_thieu/v_gioi_thieu.tpl";
        $smarty->assign("view",$view);

        $smarty->display('gioi_thieu/_layoutgioithieu.tpl');
    }
}


?>