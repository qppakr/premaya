<?php
$imagedata = base64_decode($_POST['imgdata']);
$filename = md5(uniqid(rand(),true));
//path where you want to upload image
$file = $_SERVER['DOCUMENT_ROOT'].'/webtoimg/'.$filename.'.png';
$imageurl = 'http://localhost/premaya/webtoimg/'.$filename.'.png';
file_put_contents($file,$imageurl);
echo $imageurl;
