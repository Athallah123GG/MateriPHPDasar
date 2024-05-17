<?php

    $alas = $_POST["alas"];
    $tinggi = $_POST["tinggi"];

    if($alas > 10){
        $hasil = $alas*$tinggi/2;
    }else{
        $hasil = "gagal";
    }

    echo $hasil;

?>