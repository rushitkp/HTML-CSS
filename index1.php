<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<style>
  *{
    background-color: wheat;
  }

</style>
<body>
  <?php
  echo "<h2>Variable</h2>";
  $a=8;
  $b=4.6;
  $bool=true;
  echo "<hr>";
  echo "int a=$a <br> float b=$b <br> boolean=$bool";
 echo "<hr>";

  echo "<h2>Arithmetic Operator</h2>";
    echo "<h4>Addition</h4>";
    $a=5;
    $b=101;
    $c=$a+$b;
    echo "Sum=$c";
    echo "<br>";

    echo "<h4>Subtraction</h4>";
    $a=5;
    $b=101;
    $c=$a-$b;
    echo "Sub=$c";
    echo "<br>";

    echo "<h4>Multipication</h4>";
    $a=5;
    $b=101;
    $c=$a*$b;
    echo "Mul=$c";
    echo "<br>";

    echo "<h4>Division</h4>";
    $a=5;
    $b=101;
    $c=$a/$b;
    echo "Div=$c";
    echo "<br>";
    echo "<hr>";
    $char='Rushit';
    echo "Hello "."$char"." How are you";
    echo "<hr>";

    echo "<h2>Assignment operator</h2>";
    $x=78;
    $x+=99;
    $x-=99;
    echo+"$x";
    echo "<br>";
    echo "<hr>";
  ?>

  <?php
  $s1=65;
  $s2=65;
  $s3=65;
  $total=$s1+$s2+$s3; 
  $per=$total/3;
  echo "Total=$total";
  echo "<br>";
  echo "Percentage=$per";
  $gread;
  echo "<br>";
  if($per>75)
  {
    $gread="A";
  }
  
 else if($per>60)
  {
    $gread="B";
  }
  
  else if($per>35)
  {
    $gread="C";
  }
  else if($per>30)
  {
    $gread="You are failed,Try again";
  }
  echo "Gread=$gread";
  echo "<br>";
  echo "<hr>";
  ?>

<?php
echo "<h2>Loop</h2>";

for($i=1;$i<5;$i++){
  for($j=1;$j<5;$j++){
    echo " * ";
  }
  echo "<br>";
}

for($i=1;$i<7;$i++){
  for($j=1;$j<$i;$j++){
    echo " * ";
  }
  echo "<br>";
}

for($i=1;$i<5;$i++){
  for($j=5;$j>$i;$j--){
    echo " * ";
  }
  echo "<br>";
}
echo "<br>";
for($i=1;$i<6;$i++){
  for($j=5;$j>=$i;$j--){
    echo " * ";
  }
  echo "<br>";
}
?>
</body>
</html>