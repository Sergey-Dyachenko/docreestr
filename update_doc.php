<?php
require_once('classes/CMySQL.php');
require 'lib/document.php';
   
   
         
if (isset($_POST['num_reestr'])) {$num_reestr= $_POST['num_reestr'];}
if (isset($_POST['customer'])) {$customer= $_POST['customer'];}
if (isset($_POST['doctype'])) {$doctype= $_POST['doctype'];}
if (isset($_POST['num_doc'])) {$num_doc= $_POST['num_doc'];}
if (isset($_POST['element_4_2'])) {$dd_doc= $_POST['element_4_2'];}
if (isset($_POST['element_4_1'])) {$mm_doc= $_POST['element_4_1'];}
if (isset($_POST['element_4_3'])){$yyyy_doc= $_POST['element_4_3'];}
if (isset($_POST['colvo'])) {$colvo= $_POST['colvo'];}
if (isset($_POST['description'])){$description= $_POST['description'];} 
if (isset($_POST['iddoc'])){$iddoc= $_POST['iddoc'];}        
    $docObject = new Document;
   // $docObject->saveReester($num_reestr);
    echo $iddoc;
    $docObject->update($customer,$num_reestr,$doctype,$dd_doc,$mm_doc,$yyyy_doc,2,$num_doc,$colvo,$description,$iddoc);
    echo "<script>history.go(-1)</script>"; 
    exit; 

//извлечение id-ов элементов для записи в БД

?>