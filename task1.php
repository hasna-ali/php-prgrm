<?php

$string="BEAUTIFUL TOGETHER FOUNDATION";

$newstring=str_replace(" ","",$string);

echo '<span style="color: blue; font-size: 50px;"> ';
echo strtolower($newstring );
echo '<span style="color: red; font-size: 50px;"> ';
echo '<body style="background-color:yellow">';


echo "<br>";

$fc=substr($string,8,1);
echo$fc;
$fc=substr($string,17,1);
echo$fc;
$lc=substr($string,-1);
echo$lc;

?>