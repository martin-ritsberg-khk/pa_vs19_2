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
    <form action="jagamisvorm.php" method="get">
        <div>
            <label for="firstName">Jagatav</label>
            <input type="number" id="EsimeneNum" name="1num" value="<?php echo $_GET['1num']??""; ?>">
        </div>
        <div>
            <label for="lastName">Jagaja</label>
            <input type="number" id="TeineNum" name="2num" value="<?php echo $_GET['2num']??""; ?>">
        </div>
        <input type="submit" value="Jaga">
    </form>
</body>
<?php
if ($_GET['1num']!=null and $_GET['2num']!=null){
    $num1 = $_GET['1num'];
    $num2 = $_GET['2num'];
    if ($num2==0){
        echo "Jagaja on null, jagamist ei saa teha :(";
    } else {
        echo "Jagatav on ".$num1.", jagaja on ".$num2." ning jagatis on ".round($num1/$num2, 3);
    };
} else {
    echo "Palun sisestage jagatav ja jagaja";
}