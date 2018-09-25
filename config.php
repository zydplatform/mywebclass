<?php 


defined("DB_SERVER")?null:define("DB_SERVER", "localhost");
defined("DB_USER")?null:define("DB_USER","root");
defined("DB_PASS")?null:define("DB_PASS","");
defined("DB_NAME")?null:define("DB_NAME","objects");
$thisfile=str_replace("\\","/",__FILE__);
$docRoot=$_SERVER['DOCUMENT_ROOT'];
$webRoot=str_replace(array($docRoot,"oop/connectdb.php"),"",$thisfile);
$srvroot=str_replace('connectdb.php','',$thisfile);
define('WEB_ROOT',$webRoot);
define('SRV_ROOT',$srvroot);

 ?>