<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$height = $_POST['height']/100;
$weight = $_POST['weight'];
$bmi = $weight / ($height * $height);
echo $firstName." ".$lastName."(".$age.") kehamassiindeks on ".$bmi;
echo "<br>";
echo "<a href='input.php'>Proovi veel</a>";