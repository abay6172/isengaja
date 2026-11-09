<?php

function tampil($nama, $hasil) {
    echo "<b>$nama</b><br>";
    echo "Hasil: $hasil<br><br>";
}

function celsiusKeFahrenheit($c) {
    tampil("Celsius ke Fahrenheit", ($c * 9 / 5) + 32 . " °F");
}

function celsiusKeKelvin($c) {
    tampil("Celsius ke Kelvin", $c + 273.15 . " K");
}

function fahrenheitKeCelsius($f) {
    tampil("Fahrenheit ke Celsius", ($f - 32) * 5 / 9 . " °C");
}

function kelvinKeCelsius($k) {
    tampil("Kelvin ke Celsius", $k - 273.15 . " °C");
}

celsiusKeFahrenheit(100);
celsiusKeKelvin(25);
fahrenheitKeCelsius(98.6);
kelvinKeCelsius(300);

?>