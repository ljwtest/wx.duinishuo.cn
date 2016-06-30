<?php
header('Content-Type:text/html; charset= utf-8');
$a="";
if(!empty($_POST["st"])){
   $a="你答错了哦，再想想!";
   $str="当前时间:".date('y-m-d h:i:s',time())."\r\n她的IP地址是:".$_SERVER["REMOTE_ADDR"]."\r\n她输入的是(" .$_POST['st'].")！\r\n\r\n";
   $fh=fopen(".\txt\st.txt","a");
   fwrite($fh,$str);
   fclose($fh);

   if($_POST["st"]=="大脚婷"){
      header("Location: st.php?st=1");
   }   
}else{
	$a="请输入后点击确定!";
}
?>

<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>我忍不住，希望你爱我</title>

<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>


<div class="wrapper">

	<div class="container">
		<h1>单婷,请问我喜欢的人叫什么？</h1>
		<form class="form" action="index.php" method="post">
			<input type="text" placeholder="请输入" name="st"/>
			<button type="submit">确定</button>
			<input style="color:black;background:none;border:0;" type="text" value="<?php echo $a; ?>" disabled="true"/>
			<a href="lj.php" style="color:black;">答不出？换种方式>></a>
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

