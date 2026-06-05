<?php
    $menu = ['profil','alamat','kontak','kegiatan','jadwal'];

    $berita = "Suasana Auditorium Hasan Al-Bashri MTsN 1 Sidoarjo pada Selasa (6/5/2025) tampak semarak dan penuh antusiasme.  
               Ratusan siswa dan guru berkumpul menyaksikan Pameran Hasil Karya Ujian Praktik Informatika yang digelar sebagai bagian dari evaluasi pembelajaran akhir semester genap. 
               Kegiatan ini merupakan inisiasi madrasah yang digawangi oleh Guru TIK, Erlin Yuli Anggraini, S.T. Acara ini sukses menyita perhatian dengan beragam karya inovatif berbasis teknologi.";

    $img = ['img/audit mtsn.jpg','img/logomtsn1.png'];

    $isiprofil = "Madrasah Tsanawiyah Negeri 1 Sidoarjo, semula bernama PGA 4 Tahun yang didirikan pada tahun 1968 dan belum memiliki tempat / gedung sendiri dan masih menumpang di SD Negeri 4 di Jl. A. Yani / alun – alun Sidoarjo.
                  Kemudian pada tahun 1970 pindah menempati Gedung SD Baperki di Jl. Gajah Mada No. 197 Sidoarjo, dengan Surat Izin Penempatan dari Kodim 0816 Sidoarjo hingga tahun 2001.
                  Pada tanggal 16 Maret 1978 berdasarkan Keputusan Menteri Agama Nomor 16 Tahun 1978  PGA 4 Tahun Sidoarjo  berubah nama menjadi MTs. Negeri Sidoarjo.
                  Selanjutnya pada tahun pelajaran 2002 – 2003 MTs. Negeri Sidoarjo pindah tempat lagi dari Jl. Gajah Mada No. 197 Sidoarjo ke Jl. Stadion No. 150 Kemiri Sidoarjo, 
                  dengan asset 12 rombel , 1 ruang lab.IPA , 1 ruang musholla kecil, 1 ruang Perpustakaan serta luas lahan 5.629 m2";

    $isialamat = "Jl. Stadion No.150, Kemiri, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61234";

    $kontak = "Whatsapp: 081332946056 | Telp: (031) 8953735 | Email: mtsnsidoarjo@gmail.com";

    $kegiatan = "Kegiatan meliputi: Upacara peringatan, Ekstrakurikuler, dll.";
    $jadwal = "Senin - Rabu: 06.30 - 16.15 WIB | Kamis: 06.30 - 14.20 | Jumat: 06.30 - 11.40";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTsN 1 Sidoarjo</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
    /* RESET */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f3f8f3;
        color: #333;
        line-height: 1.6;
    }

    /* HEADER */
    #header {
        background-color: #2e8b57;
        color: white;
        padding: 25px 15px;
        text-align: center;
    }

    .logo {
        height: 60px;
        width: auto;
        display: block;
        margin: 0 auto 10px;
    }

    .header-container h1 {
        font-size: 24px;
        font-weight: 600;
    }

    /* NAVBAR */
    nav {
        background-color: #76c893;
        text-align: center;
        padding: 10px 0;
    }

    nav a {
        display: inline-block;
        padding: 8px 12px;
        margin: 4px;
        background-color: #d8f3dc;
        color: #1b4332;
        text-decoration: none;
        border-radius: 5px;
        font-weight: 500;
    }

    nav a:hover {
        background-color: #2e8b57;
        color: white;
    }

    /* CONTAINER & SECTIONS */
    .container {
        max-width: 900px;
        margin: 30px auto;
        padding: 0 15px;
    }

    .section {
        background-color: #ffffff;
        padding: 20px;
        margin-bottom: 25px;
        border: 1px solid #a3d9a5;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.08);
    }

    .section:hover {
        box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    }

    .section h2 {
        font-size: 20px;
        color: #2e8b57;
        margin-bottom: 12px;
    }

    .section p {
        font-size: 15px;
        text-align: justify;
    }

    .section img {
        width: 100%;
        border-radius: 6px;
        margin-top: 12px;
    }

    /* FOOTER */
    footer {
        background-color: #2e8b57;
        color: white;
        text-align: center;
        padding: 18px 0;
        font-size: 14px;
        margin-top: 30px;
        border-radius: 5px 5px 0 0;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .header-container h1 {
            font-size: 20px;
        }

        nav a {
            font-size: 14px;
            padding: 6px 10px;
        }

        .section {
            padding: 15px;
        }
    }
    </style>
</head>

<body>

    <header id="header">
        <div class="header-container">
            <img src="<?= $img[1]; ?>" alt="Logo MTsN 1 Sidoarjo" class="logo">
             <h1>Madrasah Tsanawiyah Negeri 1 Sidoarjo</h1>
        </div>
    </header>

    <div class="main-wrapper">
    <div class="sidebar">
        <a href="#profil"><?= $menu[0]; ?></a>
        <a href="#alamat"><?= $menu[1]; ?></a>
        <a href="#kontak"><?= $menu[2]; ?></a>
        <a href="#kegiatan"><?= $menu[3]; ?></a>
        <a href="#jadwal"><?= $menu[4]; ?></a>
    </div>

    <div class="main-content">
        <div class="section" id="profil">
            <h2><?= $menu[0]; ?></h2>
            <p><?= $isiprofil; ?></p>
        </div>
        <div class="section" id="alamat">
            <h2><?= $menu[1]; ?></h2>
            <p><?= $isialamat; ?></p>
        </div>
        <div class="section" id="kontak">
            <h2><?= $menu[2]; ?></h2>
            <p><?= $kontak; ?></p>
        </div>
        <div class="section" id="kegiatan">
            <h2><?= $menu[3]; ?></h2>
            <p><?= $kegiatan; ?></p>
        </div>
        <div class="section" id="jadwal">
            <h2><?= $menu[4]; ?></h2>
            <p><?= $jadwal; ?></p>
        </div>
        <div class="section" id="berita">
            <h2>Berita</h2>
            <p><?= $berita; ?></p>
            <img src="<?= $img[0]; ?>" alt="Kegiatan Sekolah">
        </div>
    </div>
</div>

    <footer>
        &copy; <?= date("Y"); ?> MTsN 1 Sidoarjo. All rights reserved.
    </footer>

</body>
</html>