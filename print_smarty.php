<?php
require_once('classes/CMySQL.php');//соединение с базой 
require 'lib/document.php';//подключае класс document
include_once 'smarty/Smarty.class.php';//подключаем шаблонизатор smarty

$sort='NULL';//обнуляем переменную
if (isset($_GET['sort'])) {$sort= $_GET['sort'];}//передача критерия сортировки
$docObject = new Document;// создание объекта класса Document
$documents = $docObject->get($sort);// заполнение массива $documents данными из базы
$smarty=new Smarty();
$smarty->assign('documents',$documents);
//$smarty->assign('colorrow',$colorrow); 
$smarty->display('print.tpl');
//foreach ($documents as $i => $myrow) {
//if  ($i%2) $colorrow="#fff;";  else $colorrow="#ccc;"; проверка на цвет строки
?>
