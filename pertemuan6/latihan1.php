<!-- (tag pembuka php)
// membuat array dengan versi lama
$hari = array("Senin", "Selasa", "Rabu");

// membuat array versi baru
$bulan = ["Januari", "Februari", "Maret"];

// bisa membuat array dengan tipe yang berbeda beda
$arr = [100, "teks", true];

// menampilkan array versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);

// menampilkan 1 elemen pada array
echo $arr[1];
// (tag penutup php) -->

<!-- menampilkan array dengan pengulangan -->
<!DOCTYPE html>
<html>
<head>
     <title>Latihan Array</title>
     <style>
         .kotak {
             width: 30px;
             height: 30px;
             background-color: #BADA55;
             text-align: center;
             line-height: 30px;
             margin: 3px;
             float: left;
             transition: 1s;
         }
         .kotak:hover {
             transform: rotate(360deg);
             border-radius: 50%;
         }
         .clear {
             clear: both;
         }
     </style>
</head>
<body>
        
<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
    [10,11,12]
];

?>
<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
         <div class="kotak"><?= $b; ?></div>
         <?php endforeach; ?>
         <div class="clear"></div>
<?php endforeach; 
echo "<br>";

// jika ingin menampilkan atau memilih 1 angka dalam array
$contoh = [[1,2,3],[4,5,6]];
echo $contoh[1][1];
echo $contoh[1][1];
?>







</body>
</html>