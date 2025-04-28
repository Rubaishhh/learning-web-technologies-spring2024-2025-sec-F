<?php
    
    $len = 5;
    $wid = 3;
    $area = $len * $wid;
    $perimeter = 2*($len + $wid);
  
    echo "Perimeter is".$perimeter;
    echo "<br>";
    print("Area :{$area}"); 

    echo "<br>";
    echo "<br>";

    $amnt = 20000;
    $vat = $amnt*.15;
    echo "VAT = {$vat}";

    echo "<br>";
    echo "<br>";

    $num = 3;

    if($num%2==0)
        echo "{$num} is even";
    else{
        echo "{$num} is odd";
    }
    echo "<br>";
    echo "<br>";

    $num1 = 3;
    $num2 = 2;
    $num3 = 1;

    if($num1 > $num2) {
        if($num1 > $num3) {
            echo "{$num1} is the largest";
        } else {
            echo "{$num3} is the largest";
        }
    } else {
        if($num2 > $num3) {
            echo "{$num2} is the largest";
        } else {
            echo "{$num3} is the largest";
        }
    }
    echo "<br>";
    echo "<br>";

    for($i=10; $i<=100; $i++){
        if($i%2!=0){
            echo "{$i}, ";
    }
}
echo "<br>";
echo "<br>";

$ar1 = ["aiub","UIU","buet", "duet", "kuet"];
for($i=0; $i<count($ar1); $i++){
    if($ar1[$i] == "buet"){
        echo "Found {$ar1[$i]}!";
    }
}
echo "<br>";
echo "<br>";
$count =0;

for($i=1; $i<=3; $i++) {
    for($j=1; $j<=$i; $j++) {
        echo " * ";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
$letter = 'A';
for($i=1; $i<=3; $i++) {
    for($j=1; $j<=$i; $j++) {
        echo $letter++;
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

for($i=3; $i>=1; $i--) {
    for($j=1; $j<=$i; $j++) {
        echo " $j ";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

$ar2D = array(
    array(1,2,3,'A'),
    array(1,2,'B','C'),
    array(1,'D','E','F'),
);

for($i=0; $i<count($ar2D); $i++){
    for($j=0; $j<count($ar2D[$i])-1-$i; $j++){
        echo $ar2D[$i][$j]." ";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

for($i=0; $i<count($ar2D); $i++){
    for($j=0; $j<count($ar2D[$i]); $j++){
        if(is_string($ar2D[$i][$j])){
            echo $ar2D[$i][$j]." ";
        }
    }
    echo "<br>";
}

?>