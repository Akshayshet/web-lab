<?php
$file='count.txt';
$count=strval(file_get_contents($file));
file_put_contents($file,$count+1);
   echo("the no of visitors are".$count);
   ?>