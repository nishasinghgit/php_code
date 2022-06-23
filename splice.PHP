<?php
print_r("Nisha<br/>");
$arr=array(1=>"hello",2=>"hey",3=>"hii",4=>"fine",5=>"Nisha");
$s1=array_splice($arr,2,2,"true");
$ic=array_splice($arr,2);
print_r($s1);
print_r($ic);
?>