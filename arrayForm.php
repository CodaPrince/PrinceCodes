<?php
$array=[12, 13, 14, 15, 34, 50, 27];
function arrayForm($array){
    foreach($array as $value){
        if($value > 20){
$result='it greater than 10';
echo "<br>";
echo $result;
        }
        else{
            $result='it less than 10';
            echo $result;
            echo "<br>";
        }
    }
}
arrayForm($array);
?>