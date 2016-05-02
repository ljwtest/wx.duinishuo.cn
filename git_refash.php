<?php
require("./myConfig.php");
//git远程同步脚本
$today=date("Y-m-d");
$log_name="/data/gitLog/".$today.".txt";
$contents=json_encode($mysql_config)."\n";
echo $contents;
file_put_contents($log_name,$contents,FILE_APPEND);
$rec=system("git pull");
var_dump($rec);

echo "git pull comlectery!";
	
