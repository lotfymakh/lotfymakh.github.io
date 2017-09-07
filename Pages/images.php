<meta http-equiv=refresh content=10 /> <!-- Refresh the page every 10 secs -->
<?php
#Array of images - load this array with the images you would like to change every 10 secs
$img=array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg");
#A random no will be generated
# $index=rand(0,6);
#Store the name of the image in a variable
#$im=$img[$index];
#Display the image

for ($i=0; $i<3; $i++)
  {
  #$im=$img[$i];
  print "<img src=$img[$i] width=400 height=300>";
  # echo "The number is " . $i . "<br />";
  # $im=$img[$i];
  }

?>

