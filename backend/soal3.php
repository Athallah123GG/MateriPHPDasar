<?php

    $jari = $_POST["jari"];
    if($jari%2 == 0){
        $hasil = 3.14*$jari*$jari;
        echo $hasil;
    }else{
        echo "tidak boleh ganjil";
    }
    

?>