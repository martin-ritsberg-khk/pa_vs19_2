<?php
$eesnimi = "Juku";
$perenimi = "Tamm";
$vanus = 23;
$pikkus = 1.94;
$kaal = 62;

echo "Nimi on: ".$eesnimi." ".$perenimi;
echo "<br>";
echo "Vanus on: ".$vanus;
echo "<br>";
echo "Pikkus on: ".$pikkus." meetrit";
echo "<br>";
echo "Kaal on: ".$kaal." kilogrammi";
echo "<br>";

//arvutused
//$muutuja = väärtus;

$kmi = $kaal / ($pikkus * $pikkus);
echo "Kehamassiindeks on: ".$kmi;