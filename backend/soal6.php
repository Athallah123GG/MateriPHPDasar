<?php
function tambahDigit($bilangan) {
    $bilanganStr = strval($bilangan);
    $hasil = 0;
    for ($i = 0; $i < strlen($bilanganStr); $i++) {
        $hasil += intval($bilanganStr[$i]);
    }
    return $hasil;
}

function deteksiDigitKembar($bilangan) {
    $bilanganStr = strval($bilangan);
    $digitCount = array();
    
    // Menghitung kemunculan setiap digit
    for ($i = 0; $i < strlen($bilanganStr); $i++) {
        $digit = $bilanganStr[$i];
        if (isset($digitCount[$digit])) {
            $digitCount[$digit]++;
        } else {
            $digitCount[$digit] = 1;
        }
    }
    
    // Filter digit yang muncul lebih dari sekali
    $digitKembar = array_filter($digitCount, function($count) {
        return $count > 1;
    });
    
    return $digitKembar;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilangan = $_POST['bilangan'];
    
    if (is_numeric($bilangan) && strlen($bilangan) == 5) {
        $hasilPenambahan = tambahDigit($bilangan);
        $digitKembar = deteksiDigitKembar($bilangan);
        
        // echo "Hasil penambahan setiap digit dari bilangan $bilangan adalah $hasilPenambahan<br>";
        
        if (!empty($digitKembar)) {
            echo "Daftar digit yang kembar beserta jumlah kemunculannya:<br>";
            foreach ($digitKembar as $digit => $count) {
                echo "Digit $digit muncul $count kali<br>";
            }
        } else {
            echo "Tidak ada digit yang kembar.";
        }
    } else {
        echo "Masukkan tidak valid. Harap masukkan bilangan lima digit.";
    }
}
?>
