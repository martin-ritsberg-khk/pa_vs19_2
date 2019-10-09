<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        table, th, td{
            border: 2px solid black;
            padding: 5px;
            border-collapse: collapse;
        }
        th{
            background-color: bisque;
        }
    </style>
</head>
<body>
<?php
//variables
$x=8;
$y=2;
$sum=$x+$y;
$diff=$x-$y;
$product=$x*$y;
$divide=$x/$y;
$residual=$x%$y;
echo"
    <table>
        <thead>
            <tr>
                <th>Operaator</th>
                <th>Nimetus</th>
                <th>Näide</th>
                <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>x + y</td>
                <td>Liitmine</td>
                <td>".$x."+".$y."</td>
                <td>".$sum."</td>
            </tr>
            <tr>
                <td>x - y</td>
                <td>Lahutamine</td>
                <td>".$x."-".$y."</td>
                <td>".$diff."</td>
            </tr>
            <tr>
                <td>x * y</td>
                <td>Korrutamine</td>
                <td>".$x."*".$y."</td>
                <td>".$product."</td>
            </tr>
            <tr>
                <td>x / y</td>
                <td>Jagamine</td>
                <td>".$x."/".$y."</td>
                <td>".$divide."</td>
            </tr>
            <tr>
                <td>x % y</td>
                <td>Jääk</td>
                <td>".$x."%".$y."</td>
                <td>".$residual."</td>
            </tr>
        </tbody>
    </table>
"; ?>
</body>
</html>