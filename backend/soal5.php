<?php

    $penjumlahan1 = $_POST["penjumlahan1"];
    $penjumlahan2 = $_POST["penjumlahan2"];
    $penjumlahan3 = $_POST["penjumlahan3"];
    $penjumlahan4 = $_POST["penjumlahan4"];
    $penjumlahan5 = $_POST["penjumlahan5"];

    if($penjumlahan1%2 == 1){
        echo("gagal penjumlahan 1");
    }elseif($penjumlahan2%2 == 1){
        echo("gagal penjumlahan 2");
    }elseif($penjumlahan3%2 == 1){
        echo("gagal penjumlahan 3");
    }elseif($penjumlahan4%2 == 1){
        echo("gagal penjumlahan 4");
    }elseif($penjumlahan5%2 == 1){
        echo("gagal penjumlahan 5");
    }else{
    $hasil = $penjumlahan1+$penjumlahan2+$penjumlahan3+$penjumlahan4+$penjumlahan5;
    echo $penjumlahan1."+".$penjumlahan2."+".$penjumlahan3."+".$penjumlahan4."+".$penjumlahan5 ."=". $hasil;
    }



?>