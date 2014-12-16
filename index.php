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

	<img id="top" src="top.png" alt="" >
<div id="tooltip" onclick="divHide()">
  <p id="tooltip_text">Ошибка! Необходимо заполнить поле</p>
</div>	
<div id="form_container">
	<ul class="navigation">
	<li><a href="index.php">Записать</a></li>
	<li><a href="edit.php">Редактировать</a></li>
	<li><a href="search.php">Найти</a></li>

        
        <form id="form_703943" name="documentfrm" class="appnitro"  method="post"  onsubmit="return PustoePole(this);" action="add_doc.php" style="margin-top: 20px;">
		
        <div class="form_description">
		<label class="description" for="element_7">Необходимо заполнить пустые поля для записи нового документа </label>
		</div>						
		  <ul >
		  <li id="li_7" >
		      <label class="description" name="num_reestr" id="num_reestr" for="num_reestr">№ реестра </label>
              <div><input name="num_reestr" data-required="true"  class="element text medium" type="text" maxlength="255" value=""/> 
		      </div> 
              
		  </li>	
          
          <li id="li_1">
	 <label class="description" for="customer">Контрагент</label>
	 <div>
	<select name="customer" class="element text medium">
    <option value="" selected="selected"></option>
    <?php
        
       foreach ($DocumentObj->getCustomers() as $customer){
       printf("<option value='%s' >%s</option>",$customer['customer'],$customer['customer']);
       }
    /*конец функции*/
    ?>
   </select>
    </div> 
		</li>		
        
        <li id="li_2">
		<label class="description" for="doctype">Тип документа </label>
		<div>
	<select name="doctype" class="element text medium">
    <option value="" selected="selected"></option>
                    
    <?php
        
       foreach ($DocumentObj->getDoctypes() as $doctype){
       printf("<option value='%s' %s >%s</option>",$doctype['doctype'],$doctype['sel'],$doctype['doctype']);
       }
    /*конец функции*/
    ?>
    </select>
		</div> 
		</li>		
        
        <li id="li_3" >
		<label class="description" for="num_doc" id="num_doc" >№ Документа </label>
		<div>
			<input name="num_doc" data-required="true" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>	
        
      <li id="li_4" >
            <label class="description" for="element_4">Дата документа </label>
		  <span>
            <input type="date" name="data"/>
          </span>
		<!--	<input id="element_4_2" name="element_4_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4_2">DD</label>
		</span>
        <span>
			<input id="element_4_1" name="element_4_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4_1">MM</label>
		</span>
		
		<span>
	 		<input id="element_4_3" name="element_4_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_4_3">YYYY</label>
		</span>
	
		<span id="calendar_4">
			<img id="cal_img_4" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_4_3",
			baseField    : "element_4",
			displayArea  : "calendar_4",
			button		 : "cal_img_4",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>-->
        
    
        
        </li>		<li id="li_5" >
		<label class="description" id="colvo" for="element_5">Количество </label>
		<div>
			<input name="colvo" data-required="true" class="element text medium" type="text" maxlength="255" value="1"/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6" id="description"  >Примечание </label>
		<div>
			<textarea data-required="true" name="description" class="element textarea medium"></textarea> 
		</div> 
		</li>
			
		<li class="buttons">
		<input type="hidden" name="form_id" value="703943" />
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Записать" />
		</li>
      
       </form>
       
       
        <form id="form_703943" class="appnitro"  method="post" action="print_smarty.php">
			
			
			    <input type="hidden" name="form_id" value="703943" />
			    <input id="saveForm" class="button_text" type="submit" name="submit" value="Печать" />
	        
		</form>	
	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	
    <script>
        
        function PustoePole(form){              
           var tooltip_div = document.getElementById('tooltip');
           var tooltip_text = document.getElementById('tooltip_text');
           tooltip_div.style.display='none';
           tooltip_text.innerHTML='Ошибка! Необходимо заполнить поле';
           for (var i=0; i<form.elements.length; i++) {
                var elementInput=form.elements[i];
                if (elementInput.hasAttribute('data-required') && elementInput.value.trim()=="")
           {
                var inputLabel=document.getElementById(elementInput.name).innerHTML;
                   
              /*  формирование и вывод ссобщения с ошибкой*/
                var tooltip_div = document.getElementById('tooltip'); 
                var tooltip_text = document.getElementById('tooltip_text'); 
              
                  var left =pageX(elementInput)+260;
                  var top = pageY(elementInput)-80;
                  tooltip_div.style.left=String(left)+'px';
                  tooltip_div.style.top=String(top)+'px';
                  tooltip_text.innerHTML += " "+inputLabel;
                  tooltip_div.style.display='block';
                  elementInput.focus();
                 
                  return false;  
           }        
                               
           }
           return true;
       }
       /*     var inputs = new Array('num_reestr','customer','element_4_1','element_4_2','element_4_3','colvo','description');*/
        
        function pageX(elem) {// Определение координаты элемента по горизонтали
        
        	return elem.offsetParent ?
        		elem.offsetLeft + pageX( elem.offsetParent ) :
        		elem.offsetLeft;
        
        }

        // Определение координаты элемента по вертикали
        function pageY(elem) {
        	return elem.offsetParent ?
        		elem.offsetTop + pageY( elem.offsetParent ) :
        		elem.offsetTop;
      
        }
       
        function divHide(){
           var tooltip_div = document.getElementById('tooltip');
           var tooltip_text = document.getElementById('tooltip_text');
           tooltip_div.style.display='none';
           tooltip_text.innerHTML='Ошибка! Необходимо заполнить поле';
                    
       }
       
       </script>
    </body>
</html>