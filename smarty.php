<?php require 'smarty/Smarty.class.php';
$smarty= new Smarty;
$smarty->assign('name', 'Steve');
$smarty->assign('names',array('Steve', 'Jeff', 'John'));
$smarty->display('index.tpl');


?>