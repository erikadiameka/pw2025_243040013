<?php
// $mahasiswa = [
// ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
// ["033040001", "Doddy Ferdiansyah", "doddy@gmail.com", "Teknik Industri"]
// ];

$mahasiswa = [
 [
        "nrp" => "043040023",
        "nama" => "sandhika galih",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik informatika",
        "gambar" => "sandhika.jpg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "033040001",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "doddy.png"
    ],
    [
        "nrp" => "243040093",
        "nama" => "Erik Adia Meka",
        "email" => "Erikadia@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "er.jpg"
    ],
    [
        "nrp" => "243040077",
        "nama" => "Muhammad Farid",
        "email" => "shaka@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "far.jpg"
    ],
    [
        "nrp" => "243040087",
        "nama" => "Ardhi Jamil",
        "email" => "ardhii@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "ar.jpg"
    ],
    [
        "nrp" => "243040068",
        "nama" => "aldy ardiansyah",
        "email" => "aldy@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "al.jpg"
    ],
    [
        "nrp" => "2302010300",
        "nama" => "Akbar Putra Pamungkas",
        "email" => "akbarr@gmail.com",
        "jurusan" => "Manajemen",
        "gambar" => "akbar.jpg"
    ],
    [
        "nrp" => "246020021",
        "nama" => "gilang ramadhan",
        "email" => "gilang@gmail.com",
        "jurusan" => "Fotografi dan film",
        "gambar" => "gil.jpg"
    ],
    [
        "nrp" => "3211171049",
        "nama" => "yoga gunawan",
        "email" => "yogagunawan@gmail.com",  
        "jurusan" => "kimia",
        "gambar" => "yog.jpg"
    ],
    [
        "nrp" => "243040096",
        "nama" => "pondarafaell",
        "email" => "ponn@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "pon.jpg"
    ],

]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"];?>"></li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>email : <?= $mhs["email"]; ?></li>
            <li>jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
            <?php endforeach ; ?>
</body>
</html>