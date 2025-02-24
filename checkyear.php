<?php
$year=['year2', 'year1', 'year3', 'year2', 'year4', 'year2','year2'];
function checkYear($year){
foreach($year as $prince){
    if($prince == 'year2'){
        echo'year2';
        echo '<br>';
    }
    else{
        echo'XXXX';
        echo '<br>';
    }
}
}
checkYear($year);
?>