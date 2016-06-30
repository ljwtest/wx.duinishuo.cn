<?php
header('Content-Type:text/html; charset= utf-8');
  if(!empty($_POST["erxuan"])){
   $str="当前时间:".date('y-m-d h:i:s',time())."\r\n她的IP地址是:".$_SERVER["REMOTE_ADDR"]."\r\n她选择了(".$_POST["erxuan"].")！\r\n\r\n";
   $fh=fopen(".\txt\lj.txt","a");
   fwrite($fh,$str);
   fclose($fh);

   if($_POST["erxuan"]=="爱我"){
	  header("Location: st.php?st=1");
   }
  }
?>
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>我忍不住，希望你爱我</title>

<link rel="stylesheet" type="text/css" href="css/styless.css">

</head>
<body>


<div class="wrapper">

	<div class="container">
		<h1>下面两种选择,你会选？</h1>
		<form class="form" action="lj.php" method="post">
         <input type="radio" value="爱我" name="erxuan"><font color="black" face="微软雅黑">爱我</font>&nbsp&nbsp&nbsp&nbsp
		 <input type="radio" value="吃屎" name="erxuan"><font color="black" face="微软雅黑">吃屎</font><br/><br/>
		<button type="submit" >确定</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
$('#login-button').click(function(event){
	event.preventDefault();
	$('form').fadeOut(500);
	$('.wrapper').addClass('form-success');
});
</script>

</body>
</html>
