<?php
  //С��ֳ��һֻ���һ����һֻС�򣬵�������һֻС�򣬵��������ˡ�20����ж���ֻ
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