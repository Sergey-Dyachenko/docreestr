<?php

if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE); 

require_once('classes/CMySQL.php');
$dt=date('Y-m-d');
$result=mysql_query("INSERT INTO reestrs(reestr_date)values('$dt')");
header('Location: http://localhost/docflow/index.php');
$idreestr=mysql_insert_id();
exit;
?>