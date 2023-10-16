<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "n dhea aqmarina",
    "nrp" => "009876511",
    "email" => "ndheaaqmarina@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "pict1.jpg" 
    ],
    [
        "nama" => "m yoga adi pratama",
        "nrp" => "009876739",
        "email" => "myogaadipratama@gmail.com",
        "jurusan" => "Teknik Otomotif",
        "gambar" => "pict2.jpg"
    ]
 ];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
      <title>GET</title>
 </head>
 <body>
     <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
        </ul>
      
 </body>
 </html>

 <!-- 0:26:40 -->
