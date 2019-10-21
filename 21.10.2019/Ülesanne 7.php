<head>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button
        {
            -webkit-appearance: none;
        }
        input[type='number'] {
            -moz-appearance:textfield;
        }
    </style>
</head>
<body>
<form action="Ülesanne 7.php" method="get">
    <div>
        <label for="firstName">Jagatav</label>
        <input type="number" id="EsimeneNum" name="1num" value="<?php echo $_GET['1num']??""; ?>">
    </div>
    <div>
        <label for="lastName">Jagaja</label>
        <input type="number" id="TeineNum" name="2num" value="<?php echo $_GET['2num']??""; ?>">
    </div>
    <input type="submit" value="Jaga" name="divide">
</form>
<form action="Ülesanne 7.php" method="get">
    <input type="submit" value="Viska täringut" name="rand">
</form>
<form action="Ülesanne 7.php" method="get">
    <div>
        <label for="1Kulg">1. Külg</label>
        <input type="number" id="1Kulg" name="1side" value="<?php echo $_GET['1side']??""; ?>">
    </div>
    <div>
        <label for="2Kulg">2. Külg</label>
        <input type="number" id="2Kulg" name="2side" value="<?php echo $_GET['2side']??""; ?>">
    </div>
    <input type="submit" value="Leia 3. Külg" name="triangle">
</form>
</body>
<?php
function jaga($jagatav, $jagaja){
    if ($jagatav!=null and $jagaja!=null){
        if ($jagaja==0){
            return "Jagaja on null, jagamist ei saa teha :(";
        } else {
            return "Jagatav on ".$jagatav.", jagaja on ".$jagaja." ning jagatis on ".round($jagatav/$jagaja, 3);
        };
    } else {
        return "Palun sisestage jagatav ja jagaja";
    }
}

$num1 = $_GET['1num'];
$num2 = $_GET['2num'];
if(isset($_REQUEST['divide']))
{
    echo jaga($num1, $num2);
}

function taring(){
    return rand(1,6);
}

if(isset($_REQUEST['rand']))
{
    echo "Täring on ".taring();
}

function triangle($side1, $side2){
    return round(sqrt($side1*$side1+$side2*$side2));
}

$s1 = $_GET['1side'];
$s2 = $_GET['2side'];
if(isset($_REQUEST['triangle']))
{
    echo "Kolmas külg on ".triangle($s1,$s2);
}
?>