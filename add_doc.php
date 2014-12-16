<?php
require_once('classes/CMySQL.php');
require 'lib/document.php';
   
   
         
if (isset($_POST['num_reestr'])) {$num_reestr= $_POST['num_reestr'];}
if (isset($_POST['customer'])) {$customer= $_POST['customer'];}
if (isset($_POST['doctype'])) {$doctype= $_POST['doctype'];}
if (isset($_POST['num_doc'])) {$num_doc= $_POST['num_doc'];}
if (isset($_POST['data'])) {$data= $_POST['data'];}
if (isset($_POST['colvo'])) {$colvo= $_POST['colvo'];}
if (isset($_POST['description'])){$description= $_POST['description'];} 

       
    $docObject = new Document;
    $docObject->saveReester($num_reestr);
    $docObject->save($customer,$num_reestr,$doctype,$data,2,$num_doc,$colvo,$description);
   echo "<script>history.go(-1)</script>"; 
    exit; 

//извлечение id-ов элементов для записи в БД

?>