<?php
$vanus=4;
echo "Vanus on ".$vanus.". Seega ";
if ($vanus<0){
    echo "pole inimest.";
} else if ($vanus<18) {
    echo "on lats.";
} else if ($vanus<65) {
    echo "on täiskasvanu.";
} else if ($vanus<125) {
    echo "on vanake.";
} else {
    echo "on tuhk.";
}