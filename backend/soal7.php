<?php
function tentukanGanjilGenap($bilangan) {
    if ($bilangan % 2 == 0) {
        return "Genap";
    } else {
        return "Ganjil";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    $bilangan3 = $_POST['bilangan3'];
    $bilangan4 = $_POST['bilangan4'];
    $bilangan5 = $_POST['bilangan5'];
    $bilangan6 = $_POST['bilangan6'];
    
    $bilanganArray = [$bilangan1, $bilangan2, $bilangan3, $bilangan4, $bilangan5, $bilangan6];
    
    echo "Hasil penentuan ganjil atau genap:<br>";
    foreach ($bilanganArray as $index => $bilangan) {
        $hasil = tentukanGanjilGenap($bilangan);
        // echo "Bilangan " . ($index + 1) . " ($bilangan) adalah $hasil<br>";
        echo "Bilangan $bilangan adalah $hasil<br>";
    }
}
?>
