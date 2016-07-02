<?php
  //小羊繁殖，一只羊第一年生一只小羊，第三年生一只小羊，第五年死了。20年后有多少只
  $yang=array(1,0,0,0,0);
  for($i=1;$i<=20;$i++){
     $tmp=$yang[1]+$yang[3];
	 array_unshift($yang,$tmp);
	 array_pop($yang);
  }
  echo array_sum($yang);
  echo "<br/>";
  print_r($yang);
?>