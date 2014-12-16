<?php

if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE); 

require_once('classes/CMySQL.php');

$sParam = $GLOBALS['MySQL']->escape($_GET['q']); // Выход по чтению внешних данных
if (! $sParam) exit;

switch ($_GET['mode']) {
    case 'xml': // Используем XML как источник данных
        $aValues = $aIndexes = array();
        $sFileData = file_get_contents('data.xml'); // Читаем содержимое
        $oXmlParser = xml_parser_create('UTF-8');
        xml_parse_into_struct($oXmlParser, $sFileData, $aValues, $aIndexes);
        xml_parser_free( $oXmlParser );

        $aTagIndexes = $aIndexes['ITEM'];
        if (count($aTagIndexes) <= 0) exit;
        foreach($aTagIndexes as $iTagIndex) {
            $sValue = $aValues[$iTagIndex]['value'];
            if (strpos($sValue, $sParam) !== false) {
                echo $sValue . "\n";
            }
        }
        break;
    case 'sql': // Используем базу данных как источник данных
        $sRequest = "SELECT `customer` FROM `customers` WHERE `customer` LIKE '%{$sParam}%' ORDER BY `idcustomer`";
        $aItemInfo = $GLOBALS['MySQL']->getAll($sRequest);
        foreach ($aItemInfo as $aValues) {
            echo $aValues['customer'] . "\n";
        }
        break;
        
         case 'sql_doctype': // Используем базу данных как источник данных
        $sRequest = "SELECT `doctype` FROM `doctypes` WHERE `doctype` LIKE '%{$sParam}%' ORDER BY `iddoctype`";
        $aItemInfo = $GLOBALS['MySQL']->getAll($sRequest);
        foreach ($aItemInfo as $aValues) {
            echo $aValues['doctype'] . "\n";
        }
        break;
        
         case 'sql_reestr': // Используем базу данных как источник данных
        $sRequest = "SELECT `idreestr` FROM `reestrs` WHERE `idreestr` LIKE '%{$sParam}%' ORDER BY `idreestr`";
        $aItemInfo = $GLOBALS['MySQL']->getAll($sRequest);
        foreach ($aItemInfo as $aValues) {
            echo $aValues['idreestr'] . "\n";
        }
        break;
}