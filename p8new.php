<!DOCTYPE html>
<html>
<body>
  <?php
  function pr($a){
    foreach ($a as $b){
      foreach ($b as $c){
        echo $c ." ";
      }echo "<br>";
    }echo "<br>" ;
  }
  $a=[[1,2,3],[4,5,6],[7,8,9]];
  $b=[[7,8,9],[4,5,6],[1,2,3]];
  echo "<b>First martix:</b><br>";pr($a);
  echo "<b>First martix:</b><br>";pr($b);
  for ($i=0; $i < 3; $i++) 
    for($j=0; $j < 3; $j++)
      $c[$i][$j]=$a[$j][$i];
        echo "<b>Transpose of first matrix:</b><br>";pr($c);
        for ($i=0; $i < 3; $i++) 
          for($j=0; $j < 3; $j++)
            $c[$i][$j]=$a[$i][$j]+$b[$i][$j];
              echo "<b>Addition of two matrix:</b><br>"; pr($c);    
              for ($i=0; $i < 3; $i++) 
          for($j=0; $j < 3; $j++){
            $c[$i][$j]=0;
            for($k=0; $k < 3; $k++)
              $c[$i][$j]+=$a[$i][$k]*$b[$k][$j];
              }
              echo "<b>Multiplication of two matrix:</b><br>"; pr($c);    

  ?>
</body>
</html>