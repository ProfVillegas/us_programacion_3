<?php
$array1[]="Uva";
$array1[]="Manzana";
$array1[]="Durazno";

print_r($array1);
var_dump($array1);
echo "<ul>";
while(list($var, $val)=each($array1)){
    echo "<li>{$var} con valor {$val}</li>";
}
echo "</ul>";

$array2=array("Leon","Jaguar","Pantera");

echo "<ul>";
for($x=0;$x<count($array2);$x++){
    echo "<li>{$x} - {$array2[$x]}</li>";
}
echo "</ul>";

$array3=array('peso_mx'=>'$MX','dolar'=>'$dls');

echo "<ol>";
foreach($array3 as $index=>$valor){
   echo "<li>{$index} - {$valor}</li>"; 
}
echo "</ol>";

$array4[]=array("Leon","Jaguar","Pantera");
$array4[]=array("Pastor Aleman","Boxer","chihuahua");
$array[]

echo "<pre>";
print_r($array4);
echo "</pre>";
echo "<ul>";
foreach($array4 as $id=>$val){
    echo "<li> <ol>";
    foreach($val as $i=>$v){
        echo "<li>{$i} - {$v}</li>";
    }
    echo "</ol> </li>";
}
echo "</ul>";

?>