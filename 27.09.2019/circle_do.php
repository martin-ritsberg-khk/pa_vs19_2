<?php
$circleRadius = $_GET['circle-radius'];
//var_dump($circleRadius);
//echo $circleRadius * $circleRadius;
$circleArea = pi() * $circleRadius * $circleRadius;
$circleCircumference = pi() * $circleRadius * 2;
//print
echo '<hr>';
echo 'Ringi pindala: '.round($circleArea, 3).'<br>';
echo 'Ringi ümbermõõt: '.round($circleCircumference, 3).'<br>';