<?php error_reporting(0); define('IN_CRONLITE', true); define('VER', 'V1.6 (Build 1910686)'); define('SYSTEM_ROOT', dirname(__FILE__).'/'); define('ROOT', dirname(SYSTEM_ROOT).'/'); define('SYS_KEY', 'sillyli'); define('CC_Defender', 0); date_default_timezone_set("PRC"); $date = date("Y-m-d H:i:s"); session_start(); if(CC_Defender!=0) include_once SYSTEM_ROOT.'security.php'; require ROOT.'config.php'; if(!$dbconfig['user']||!$dbconfig['pwd']||!$dbconfig['dbname']){ header('Content-type:text/html;charset=utf-8'); exit("<script language='javascript'>alert('你还没安装！');window.location.href='install/';</script>"); } include_once(SYSTEM_ROOT."db.class.php"); $DB=new DB($dbconfig['host'],$dbconfig['user'],$dbconfig['pwd'],$dbconfig['dbname'],$dbconfig['port']); $conn = new PDO("mysql:host=".$dbconfig['host'].";dbname=".$dbconfig['dbname'].";charset=utf8",$dbconfig['user'],$dbconfig['pwd']);if($DB->query("select * from sillyli_config where 1")==FALSE){ header('Content-type:text/html;charset=utf-8');  } $rs=$DB->query("select * from sillyli_config"); while($row=$DB->fetch($rs)){ $conf[$row['k']]=$row['v']; } include_once(SYSTEM_ROOT."function.php"); include_once(SYSTEM_ROOT."member.php");
