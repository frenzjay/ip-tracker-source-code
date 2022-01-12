<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$file = 'ip.json';

$fp = fopen($file, 'a');

fwrite($fp, $ipaddress);

fclose($fp);

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
body {
  background-color: black;
  }
h1, center {
   color: white;
   }
   .bone {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
 </style>
 <br>
 <center><p>hehe</p></center>
 <br>
<center><h1><?php echo $ipaddress ?></h1></center><br><br><br>
<img src="skele.png" alt="get reckt" class="bone">
<br><br><br>
