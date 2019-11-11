<?php 
print "<h3> REFRESH PAGE </h3>"; 
$file='count.txt';
$count=strval(file_get_contents($file));
file_put_contents($file,$count +1);
    echo("you are visitor number:".$count);
?> 