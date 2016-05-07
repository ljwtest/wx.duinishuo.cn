<?php


$mem=new memcache();
$mem->connect("120.27.6.97","11211");
echo $mem->get("num1");
