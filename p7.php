<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="refresh" content="1">
  <style>
  p{
    color:white;
    position:absolute;
    top:50%;
    left:50%;
    font-size:90px;
    transform:translate(-50%,-50%);

  }
  body{
    background-color:black;
  }
  </style>

 <p> <?php
 date_default_timezone_set("Asia/kolkata");
 echo date("h:i:s A M dS,Y");?></p>
</head>
</html>
