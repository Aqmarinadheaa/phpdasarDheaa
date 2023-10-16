<?php
// Pertemuan 2 - PHP Dasar
// Materi mengenai : Sintaks PHP
// Standar Output
// echo, print -digunakan mencetak tulisan/isi variabel
// print_r -khusus digunakan untuk mencetak isi array 
// var_dump -digunakan untuk melihat isi dari variabel, nanti akan tampil info mengenai variabel tersebut 

// var_dump("zanuar");

// Penulisan sintaks PHP
// echo "zanuar\n";
// echo 123; 

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// variabel dan tipe data
// variabel
// variabel tidak boleh diawali dengan angka, tapi boleh mengandung angka ($nama1) angkanya harus dibelakang tidak boleh di depan

// $nama = "zanuar prasetyo";
// manggilnya : echo "halo, nama saya $nama";

// operator
// atirmatika
// + - * / %
//echo 1 + 1;

// bisa juga dengnan dimasukkan dulu di dlm variabel
// $x = 10;
// $t = 12;
// echo $x + $t;

// operator penggabung string / concatenation / concat
// . (menggunakan titik)
// cara manggilnya :
// $nama_depan ="zanuar";
// $nama_belakang ="prasetyo";
// echo $nama_depan . " " . $nama_belakang

// operator assignment :
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Zanuar";
// $nama .= " ";
// $nama .= "prasetyo";
// echo $nama;

// operator perbandingan, hanya nilai yg di inputkan (1) bukan tipe datanya:
// <, >, <=, >=, ==, !=
// var_dump(1 > 5);
// var_dump(1 == 5);
// var_dump( 1 == "1");

// operator identitas, mengecek tipe datanya juga
// ===, !==
// var_dump(1 === "1")

// operator logika
// &&, ||, !
$x = 30;
var_dump($x < 20 && $x %2 == 0);

var_dump($x < 20 || $x %2 == 0);
?>

   













<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body> -->
    <!-- pakai variabel -->
    <!-- <h1>Halo, Selamat datang <?php echo "$nama"; ?></h1> -->

    <!-- php di dalam html -->
    <!-- <h1>Halo, Selamat datang <?php echo "Nadiatull"; ?></h1> -->
    <!-- <p>ini adalah paragraf</p> -->

    <!-- html di dalam php -->
    <?php
    // echo "<h1>Halo selamat datang zanuar</h1>"
    ?>
<!-- </body>
</html> -->