<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <style>
        table{
            border-collapse: collapse;
            border: black 3px solid;
        }
        td {
            border: black 1px solid;
            padding: 3px 5px;
        }
        th {
            border: black 2px solid;
            padding: 3px 5px;
        }
    </style>
</head>
<body>

<?php
function randColor(){
    return "#".dechex(rand(0,15)).dechex(rand(0,15)).dechex(rand(0,15)).dechex(rand(0,15)).dechex(rand(0,15)).dechex(rand(0,15));
}
function tableRow($columns){
    for($i=1;$i<=$columns;$i++)
    {
        echo "<td style='background-color: ".randColor()."'></td>";
    }
}
function tableHeaderRow($columns){
    $color = randColor();
    for($i=1;$i<=$columns;$i++)
    {
        echo "<th style='background-color: ".$color."'></th>";
    }
}
function tableDo($columns, $rows){
    echo "<table>";
    echo "<theader>";
    echo "<tr>";
    tableHeaderRow($columns);
    echo "</tr>";
    echo "</theader>";
    echo "<tbody>";
    for($i=1;$i<=$rows;$i++)
    {
        echo "<tr>";
        tableRow($columns);
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

tableDo(155,120);
?>

</body>
</html>
