<?php
// yg berhubungan dengan date/time
// time(), date(), mktime(), strtotime()

// Date
// Untuk menampilkan tanggal dengan format tertentu
// menentukan hari,tanggal saat dibuatnya :
// echo date("l,d-M-Y");

//Time
// UNIX Timestamo / EPOCH time
// (3angka awal) detik yg sudah berlalu sejak 1 januari 1970
// echo time();

// menghitung 8 hari kedepan
// echo date("d M Y", time()+60*60*24*8);
// arti dari angka (1mnt=60dtk x2, sehari=24jm, 8=hari yg dicari)

// menghitung 10 hari kebelakang
// echo date("d M Y", time()-60*60*24*10);
// arti dari angka (1mnt=60dtk x2, sehari=24jm, 10=hari yg dicari)


// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l,d-M-Y", mktime(0,0,0,1,6,2006));

// strtotime
echo date("l", strtotime("01 august 1965"));
?>

<!-- referensi format untuk menampilkan tanggal,dsb : php.net -->

<!-- yg berhubungan dengan string -->
<!-- strlen() untuk menghitung panjang sebuah string -->
<!-- strcmp() untuk menggabungkan 2 buah string  -->
<!-- explode() untuk memecah 2 buah string menjadi array  -->
<!-- htmlspecialchars() adalah function khusus untuk menjaga website kita dari orang lain  -->

<!-- Utilit atau fungsi bantuan -->
<!-- var_dump() digunakan untuk mencetak variabel, array,pbject -->
<!-- isset() untuk mengecek apakah sebuah variabel udah pernah dibikin atau belum -->
<!-- empty() untuk mengecek apakah variabel yang ada kosong/tidak ada isinya/tidak -->
<!-- die() digunakan untuk memberhentikan sebuah program (ketika program bertemu dgn die() maka program dibawahnya tidak akan dieksekusi atau akan dibiarkan saja) -->
<!-- sleep() digunakan untuk memberhentikan sementara (misal berhenti 2detik setelah itu kembali seperti semula) -->