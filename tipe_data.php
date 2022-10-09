<?php
$nama = "Selvi";
echo "hello nama saya $nama";
echo "<br>";

str_replace("Selvi", "Selvi", $nama, );
echo "<br><br>";

// Integer
$umur = 18;

var_dump($umur) - 3 . "<br";
var_dump($umur);
echo "<br><br>";

// float
$nilai = - 3.71;

var_dump ($nilai);
echo "<br><br>";

// Boolean
$is_student = true;
var_dump($is_student);
echo "<br><br>";

// Array biasa
$mahasiswa1 = ["Selvi", 18, 3.71, false];
var_dump($mahasiswa1);

echo "<br><br";

echo "umur saya $mahasiswa1[1]";

echo "<br><br>";

// Array Asosiatif
$mahasiswa2 = [
    "nama" => "Selvi",
    "umur" => 18,
    "nilai" => 3.71,
    "is_active" => true
];

var_dump($mahasiswa2);

echo "<br>";

echo "Hallo, saya" . $mahasiswa2['nama'];