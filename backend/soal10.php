<?php
function hitungMedian($arr) {
    $count = count($arr);
    sort($arr);
    $middleVal = floor(($count-1)/2);
    if($count % 2) {
        return $arr[$middleVal];
    } else {
        return ($arr[$middleVal] + $arr[$middleVal + 1]) / 2.0;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilangan = intval($_POST['bilangan']);
    
    $kelipatan = array();
    
    echo "Kelipatan 6 yang tidak habis dibagi 5, hingga mencapai atau sebelum bilangan $bilangan:<br>";
    for ($i = 6; $i <= $bilangan; $i += 6) {
        if ($i % 5 != 0) {
            $kelipatan[] = $i;
            echo $i . "<br>";
        }
    }
    
    if (count($kelipatan) > 0) {
        $median = hitungMedian($kelipatan);
        echo "<br>Nilai median dari kelipatan yang ditampilkan adalah: $median";
    } else {
        echo "<br>Tidak ada kelipatan 6 yang tidak habis dibagi 5 yang ditemukan.";
    }
}
?>
