<?php
  require_once('classes/CMySQL.php');
  require 'lib/document.php';
  $DocumentObj = new Document;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Form</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="js/view.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>

<link href="css/jquery.autocomplete.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.pack.js"></script>
<script type="text/javascript" src="js/script.js"></script>


</head>
<body id="main_body">

	<img id="top" src="top.png" alt="">
	

    <div id="form_container">
	<ul class="navigation">
	<li><a href="index.php">Записать</a></li>
	<li><a href="edit.php">Редактировать</a></li>
	<li><a href="search.php">Найти</a></li>
	</ul>
		
   			</ul>
		</form>	
        
        <form id="form_703943" class="appnitro"  method="post" onsubmit="return PustoePole();" action="update_doc.php" style="margin-top: 20px;">
					<div class="form_description">
			<label class="description" for="element_7">Здесь можно отредактировать выбранную запись </label>
		</div>						
			<ul >
		
   <?php	
		
    if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    else
    error_reporting(E_ALL & ~E_NOTICE); 
    require_once('classes/CMySQL.php');
     
     if (isset($_GET['a'])) {$iddoc= $_GET['a'];}
    
     $shablon="SELECT documents.idreestr,documents.iddoctype,customer,iddocument, doctype, doc_num,data, number,note FROM documents, customers, doctypes,users, reestrs
     WHERE documents.idcustomer = customers.idcustomer
     AND documents.iddoctype = doctypes.iddoctype
     AND documents.idreestr = reestrs.idreestr
     AND documents.iduser = users.iduser
     AND documents.iddocument=".$iddoc;
  
   $result=mysql_query($shablon);
   $document=mysql_fetch_array($result);
        
        echo "<li id='li_7' >
		<label class='description' for='element_7'>№ реестра </label>
		<div>
			<input id='num_reestr' name='num_reestr' class='element text medium' type='text' maxlength='1000' value='".$document['idreestr']."'/> 
		</div> 
		
         <div><input name='iddoc' data_required='true' style='opacity:0;' class='element text medium' type='text' maxlength='255' value='".$document['iddocument']."'/> 
		      </div> 
        </li>		<li id='li_1' >
		<label class='description' for='customer'>Контрагент </label>
		<div>
			<input id='customer' name='customer' class='element text medium' type='text' maxlength='255' value='".$document['customer']."'/> 
		</div> 
		</li>
        ";
      ?>
        		<li id='li_2' >
		<label class='description' for='doctype'>Тип документа </label>
		<div>
	   <select name='doctype' class='element text medium'>
        <option value='' selected='selected'></option>
                    
   <?php
        
       foreach ($DocumentObj->getDoctypes() as $doctype){
       printf("<option value='%s' %s >%s</option>",$doctype['doctype'],$doctype['sel'],$doctype['doctype']);
       }
    /*конец функции*/
    ?>
            </select>
		</div> 
	
    </li>
    <?php 
            
    echo "		<li id='li_3' >
		<label class='description' id='num_doc' for='num_doc'>Номер документа</label>
		<div>
			<input  name='num_doc' data_required='true' class='element text medium' type='text' maxlength='255' value='".$document['doc_num']."'/> 
		</div> 
		</li>		<li id='li_4' >
  		
    <label class='description' for='element_4'>Дата документа </label>
		  <span>
            <input type='date' name='data' value='".$document['data']."'/>
          </span>
		 
		</li>		<li id='li_5' >
		<label class='description' id='colvo' for='element_5'>Количество </label>
		<div>
			<input  name='colvo' data_required='true' class='element text medium' type='text' maxlength='255' value='5'/> <!--".$document['number']."-->
		</div> 
		</li>		<li id='li_6' >
		<label id='description' class='description' for='element_6'>Примечание </label>
		<div>
			<textarea  data_required='true' name='description' class='element textarea medium'>".$document['note']."</textarea> 
		</div> 	</li>"; 
        ?>		
		
        <li class="buttons">
		<input type="hidden" name="form_id" value="703943" />
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Сохранить изменения" />
		</li>
       </form>
       
       
        <form id="form_703943" class="appnitro"  method="post" action="print_smarty.php">
			
			
			    <input type="hidden" name="form_id" value="703943" />
			    <input id="saveForm" class="button_text" type="submit" name="submit" value="Печать" />
	        
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	    <script>
        
        function PustoePole(){
        
              
       for (var i=0; i<document.forms['documentfrm'].elements.length; i++)
            {
                var elementInput=document.forms['documentfrm'].elements[i];
                  if (elementInput.hasAttribute('data_required')) 
                    { if (elementInput.value.trim()==""){
                     var inputLabel=document.getElementById(elementInput.name).innerHTML;
                     
                     alert("Необходимо заполнить поле: "+inputLabel);
                     elementInput.focus();
                                                  
                     var a = false;}
                    }
                    
            }
       return a;}
       /*     var inputs = new Array('num_reestr','customer','element_4_1','element_4_2','element_4_3','colvo','description');*/
       </script>
    </body>
</html>