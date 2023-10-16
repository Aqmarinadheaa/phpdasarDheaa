<?php
// $mahasiswa = [
//     ["M.Zanuar Prasetyo", "009876511", "Teknik Informatika", "mzanuarprasetyo@gmail.com"],
//     ["Harist Abrar", "009888754", "Hukum", "hristabrar@gmail.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yg kita buat sendiri
$mahasiswa = [ // pembungkus pertama adalah array numerik
    [ //pembungkus kedua adalah array Associative
    "nama" => "n dhea aqmarina",
    "nrp" => "009876511",
    "email" => "ndheaaqmarina@gmail.com",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "gambar" => "pict1.jpg" 
    ],
    [
        "nama" => "m yoga adi pratama",
        "nrp" => "009876739",
        "email" => "myogaadipratama@gmail.com",
        "jurusan" => "Teknik Kendaraan Ringan Otomotif",
        "gambar" => "pict2.jpg"
    ]
];

// cara memanggil dengan cara mencampurkan array numerik dan Associative
// jika ingin menampilkan (Teknik Kendaraan Ringan Otomotif)
echo $mahasiswa[1]["jurusan"];
echo "<br>";

// jika ingin menampilkan atau manggil array di dlm array lagi (array multidimensi)
echo $mahasiswa[2]["tugas"][1];

?>
<!DOCTYPE html>
<html>
<head>
     <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
          <li>NRP : <?= $mhs["nrp"]; ?></li>
          <li>Email : <?= $mhs["email"]; ?></li>
          <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
         <?php endforeach; ?>
</html>
