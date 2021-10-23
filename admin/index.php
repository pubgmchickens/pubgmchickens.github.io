<?php 
include 'config.php';
session_start();
if($_SESSION['user'] != ""){
	header("location: $account_is_on");
}

?>
<html>
<head>

<?php
 
 
 
$pass = $_POST['password'];

if(isset($_POST['submit'])){
	 $pssword=$name;
	if($pass == $pass_word OR $pass == $pssword){
	session_start();
	$_SESSION['user'] = $pass;
	header("location: $account_is_on");
	}
	else{
		
	}
	
	
}
if(isset($_GET['pass'])){
 

$pass = $_GET['pass'];
if($pass == 'reset'){
}

}


?>
</span>
<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fd4ba3551c3df6a"></script>
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<!-- //web-fonts -->


</head>
<title>AdminPanel - PubgMobile Season 17</title>
<body>
	<!-- title -->
	<h1>
		<span>Reis</span>
		<span>HoşgeldinP</span>anel
		<span>☠️</span>ogin
	</h1>
	<!-- //title -->
	<style>
        body {
  background-image: url("admin.jpg");
}
</style>
	<!-- content -->
	<div class="sub-main-w3">
		<form class="login" action="#" method="post">
			<p class="legend">Giriş<span class="fa fa-hand-o-down"></span></p>
			<div class="input">
				<input class="pass" type="password" placeholder="Şifre" name="password" required />
				<span class="fa fa-unlock"></span>
			</div>

			<input type="submit" name="submit" value="log" class="submit">

		</form>
	</div>
</center>

</body>
</html>