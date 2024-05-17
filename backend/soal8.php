<?php
function apakahPrima($bilangan) {
    // Bilangan prima harus lebih besar dari 1
    if ($bilangan <= 1) {
        return false;
    }
    // Periksa faktor dari 2 sampai akar kuadrat dari bilangan
    for ($i = 2; $i <= sqrt($bilangan); $i++) {
        if ($bilangan % $i == 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilangan = $_POST['bilangan'];
    
    // Konversi nilai input ke integer
    $bilangan = intval($bilangan);
    
    if (apakahPrima($bilangan)) {
        echo "Bilangan $bilangan adalah bilangan prima.";
    } else {
        echo "Bilangan $bilangan bukan bilangan prima.";
    }
}
?>
