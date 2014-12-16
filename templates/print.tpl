<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE></TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.1.2 (Windows)">
	<META NAME="CREATED" CONTENT="20131003;213546674000000">
	<META NAME="CHANGED" CONTENT="20131003;213707111000000">
	<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.autocomplete.pack.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
     <STYLE TYPE="text/css">
    <!--
		@page { margin: 2cm }
		P { margin-bottom: 0.21cm }
        
	-->

	</STYLE>
</HEAD>
<BODY LANG="ru-RU" DIR="LTR">


<TABLE WIDTH=795 CELLPADDING=7 CELLSPACING=0 STYLE="page-break-before: always">
	<COL WIDTH=162>
	<COL WIDTH=101>
	<COL WIDTH=93>
	<COL WIDTH=80>
	<COL WIDTH=80>
	<COL WIDTH=207>
	<TR>
		<TD COLSPAN=6 WIDTH=699 HEIGHT=11 VALIGN=BOTTOM STYLE="border: 1px solid #000000; padding: 0cm 0.19cm">
			<P ALIGN=CENTER><FONT SIZE=4><I><B>ООО &quot;Интертелеком&quot;</B></I></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=6 WIDTH=699 HEIGHT=38 VALIGN=BOTTOM STYLE="border: 1px solid #000000; padding: 0cm 0.19cm">
			<P ALIGN=CENTER STYLE="margin-bottom: 0cm"><FONT SIZE=4>Реестр
			исходящей документации, переданной Одесским отделением (отдел
			продаж)</FONT></P>
			<P ALIGN=CENTER><FONT SIZE=4>в канцелярию Генеральной дирекции</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=6 WIDTH=699 HEIGHT=11 VALIGN=BOTTOM STYLE="border: 1px solid #000000; padding: 0cm 0.19cm">
			<P ALIGN=CENTER><FONT SIZE=4><SPAN LANG="ru-RU">13.05.2013</SPAN></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=162 HEIGHT=46 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.19cm; padding-right: 0cm">
			<P ALIGN=CENTER><FONT SIZE=4><I><B><a href="http://localhost/docflow/print.php?sort=customer" style="text-decoration: none; color: black; "><P id="customer">Название организации
			(контрагента)</P></a></B></I></FONT></P>
		</TD>
		<TD WIDTH=101 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.19cm; padding-right: 0cm">
			<P ALIGN=CENTER><FONT SIZE=4><I><B><a href="http://localhost/docflow/print.php?sort=doctype" style="text-decoration: none; color: black;">Вид документа</a></B></I></FONT></P>
		</TD>
		<TD WIDTH=93 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.19cm; padding-right: 0cm">
			<P ALIGN=CENTER><FONT SIZE=4><I><B><a href="http://localhost/docflow/print.php?sort=doc_num" style="text-decoration: none; color: black;">Номер</a></B></I></FONT></P>
		</TD>
		<TD WIDTH=80 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.19cm; padding-right: 0cm">
			<P ALIGN=CENTER><FONT SIZE=4><I><B><a href="http://localhost/docflow/print.php?sort=data" style="text-decoration: none; color: black;">Дата</a> </B></I></FONT>
			</P>
		</TD>
        <TD WIDTH=80 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.19cm; padding-right: 0cm">
			<P ALIGN=CENTER><FONT SIZE=4><I><B><a href="http://localhost/docflow/print.php?sort=number" style="text-decoration: none; color: black;">Количество</a></B></I></FONT>
			</P>
		</TD>
		<TD WIDTH=207 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0cm 0.19cm">
			<P ALIGN=CENTER><FONT SIZE=4><I><B>Примечание </B></I></FONT>
			</P>
		</TD>
	</TR>
  {foreach $documents as $myrow}
        
        <TR VALIGN=BOTTOM STYLE='background-color:{if $i%2}#fff{else}#ccc{/if}'>
       
        <TD WIDTH=162 HEIGHT=11 STYLE='border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.19cm; padding-right: 0cm'>
	       <P LANG='uk-UA'><FONT SIZE=3><a href='http://localhost/docflow/edit.php?a={$myrow.iddocument}'>{$myrow.customer}<a></FONT></P>
		</TD>
		<TD WIDTH=101 STYLE='border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.19cm; padding-right: 0cm'>
			<P LANG='uk-UA' ALIGN=CENTER><FONT SIZE=3>{$myrow.doctype}</FONT></P>
		</TD>
		<TD WIDTH=93 STYLE='border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.19cm; padding-right: 0cm'>
			<P ALIGN=CENTER><FONT SIZE=3>{$myrow.doc_num}</FONT></P>
		</TD>
		<TD WIDTH=80 STYLE='border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.19cm; padding-right: 0cm'>
			<P><FONT SIZE=3>{$myrow.data}</FONT></P>
		</TD>
        <TD WIDTH=80 STYLE='border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.19cm; padding-right: 0cm'>
			<P><FONT SIZE=3>{$myrow.number}</FONT></P>
		</TD>
        
		<TD WIDTH=207 STYLE='border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-left: 0.19cm; padding-right: 0cm'>
		     <P><FONT SIZE=3>{$myrow.note}</FONT></P>
        </TD>
        </TR>
    {$i=$i+1}
    {/foreach}    
</TABLE>
<P STYLE="margin-bottom: 0cm"><BR>
</P>
<P STYLE="margin-bottom: 0cm"><BR>
</P>
<P STYLE="margin-bottom: 0cm"><BR>
</P>
<P STYLE="margin-bottom: 0cm"><BR>
</P>
<P STYLE="margin-bottom: 0cm,margin-left:10cm" >Сдал:______________________			Принял:______________________</P>

</BODY>
</HTML>