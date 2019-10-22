<?php
function isPrime($candidate){
    $candidate = abs($candidate);
    $i = 2;
    while($i < $candidate){
        if($candidate % $i == 0){
            return false;
        }
        $i++;
    }
    return true;
}

$end = 100000;
$start = 0;
while ($start<=$end){
    if(isPrime($start)){echo $start." on primaararv.<br>";}
    else{echo $start." ei ole primaararv.<br>";};
    $start++;
}