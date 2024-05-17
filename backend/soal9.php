<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilangan = intval($_POST['bilangan']);
    
    echo "Kelipatan 6 yang habis dibagi 6 tetapi tidak habis dibagi 5, hingga mencapai atau sebelum bilangan $bilangan:<br>";

    for ($i = 6; $i <= $bilangan; $i += 6) {
        if ($i % 5 != 0) {
            echo $i . "<br>";
        }
    }
}
?>
