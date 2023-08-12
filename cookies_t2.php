<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>(Type a title for your page here)</title>
</head>

<body>

<?Php
if(strlen(@$_COOKIE["Cookie"]) > 0 ){
echo "Welcome " .$_COOKIE["Cookie"];

echo "<br><br><font face='Verdana' size='2'>Your name should appear after the welcome message above if cookie is available. </font>";
}else{
echo " No Cookie is set ";
}
?>
<br><br><br>
<center><font face='Verdana' size='2'><a href=cookies_t1.php>Start a new cookie cookies_t1.php</a> | <a href=cookies_t2.php>Check the cookie cookies_t2.php</a> | <a href=cookies_t3.php>Remove the cookie cookies_t3.php</a>
</font></center>

</body>

</html>
