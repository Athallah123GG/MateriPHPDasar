<?php

$bilangana = $_POST["bilangana"];
$bilanganb = $_POST["bilanganb"];

    if($bilangana == 0){
        echo("Bilangan Tidak Boleh 0");
    }
    elseif($bilanganb == 0){
        echo("Bilangan Tidak Boleh 0");
    }else{
        $hasil = $bilangana/$bilanganb;
        echo $hasil;
    }


?>