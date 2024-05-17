<?php

$jari = $_POST["jari"];

if($jari%2 == 1){
    $hasil = 2*3.14*$jari;
    echo $hasil;

}else{
    echo("gagal");
}

?>