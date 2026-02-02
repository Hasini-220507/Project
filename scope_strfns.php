<?php
$y=10;//global variable
function locals(){
    global $z;
    global $y;
    $x=1;//local variable
    $z=9;
    echo $x;
    echo "global in fn $y here.<br>";
}
locals();
echo "<br>";
locals();
echo "the value of is $y<br>";
echo "the local as global $z<br>";

function statvar(){
static $count=0;//without static only one number repeatedly prints
echo $count."<br>";
$count++;
}
statvar();
statvar();
statvar();
statvar();

//string functions
$usename="hasini is a good girl";
$usename=strtolower($usename);
$usename=strtoupper($usename);
$usename=trim($usename);
//$usename=str_pad($usename,10,0);
//$usename=strlen($usename);
//$usename=strrev($usename);
$usename=strtolower($usename);
//$usename=strcmp($usename,"hello");
//$usename=strcmp($usename,"HASINI");
//$usename=strpos($usename,"a");
$lastname=substr($usename,0,3);
$firstname=substr($usename,1,3);
echo $usename;
$explode=explode(" ",$usename,);
foreach($explode as $ex){
    echo $ex,"<br>";
}
$implode=array("hasini","is","a","good","girl");
echo implode(" ",$implode);

?>