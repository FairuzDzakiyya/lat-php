<?php
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$arr1 = ["Rabu", "Juni", 30, true];  //array numerik

// menampilkan array var_dump() / print_t()
var_dump($arr1);
echo "<br>";

// menampilkan satu elemen array
echo $arr1[1];
echo "<br>";

// menambahkan element baru di array
$hari[] = "Kamis";
$hari[] = "Jumat";
var_dump($hari);
echo "<br>";

// menampilkan semua array ke user
foreach ($hari as $h) {
    echo "$h <br>";
}

// Array numerik -> array yang memiliki index berupa string
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo $angka[8], '<br>';
// yng ditampilkan angka 9

// array asosiatif -> array yang memiliki index berupa string
$siswa = [
    'nama' => 'Nisa',
    'umur' => 16,
    'email' => 'nisa@gmail.com'
];

foreach($siswa as $s) {
    echo "$s <br>";
}
// cara menampilkan satu elemen
echo $siswa['nama'] . '<br>';

// multiple array -> array di dalam array (multidimensi)
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
echo $angka[2][0];
foreach ($angka as $a) {
    // cara pertama
    echo $a[0] . '<br>';
    echo $a[1] . '<br>';
    echo $a[2] . '<br>';

    // cara kedua
    foreach ($a as $b) {
        echo $b . '<br>';
    }
    echo '<br>';
}

// latihan 2
$siswa = [
    ['nama' => 'Devan', 'umur' => 16, 'hobi' => 'futsal'],
    ['nama' => 'Ravi', 'umur' => 16, 'hobi' => 'Nyanyi'],
    ['nama' => 'Risma', 'umur' => 16, 'hobi' => 'Nulis'],
];

foreach($siswa as $s) {
    foreach($s as $s1){
        echo $s1 . '<br>';    
    }
    echo '<br>';
}

foreach($siswa as $s) {
    echo "<ul>";
    echo "<li>nama : " . $s['nama'] . '</li>';
    echo "<li>umur : " . $s['umur'] . '</li>';
    echo "<li>hobi : " . $s['hobi'] . '</li>';
    echo "</ul>";
}
// menggunakan dua foreach lantaran adanya array di dalam array
// jadi kita memiliki dua foreach dengan dua variable penampung yang baru

?>