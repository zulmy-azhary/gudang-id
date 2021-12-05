<?php 

// Indonesia Date Format
function indoDate($date){
    $d = substr($date, 8, 2);
    $m = substr($date, 5, 2);
    $y = substr($date, 0, 4);

    return "$d/$m/$y";
}

function globalDate($date){
    $y = substr($date, 6, 4);
    $m = substr($date, 3, 2);
    $d = substr($date, 0, 2);

    return "$y-$m-$d";
}