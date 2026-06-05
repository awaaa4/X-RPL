<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div>
        <nav>
            <div class="navbar navbar-expand-lg navbar-dark bg-dark">
                <ol class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-3">
                    <a class="nav-link active" href="?menu=profil">Profil</a>
                    </li>
                    <li class="nav-item ms-3">
                    <a class="nav-link" href="?menu=sejarah">Sejarah</a>
                    </li>
                    <li class="nav-item ms-3">
                    <a class="nav-link" href="?menu=jurusan">Jurusan</a>
                    </li>
                    <li class="nav-item ms-3">
                    <a class="nav-link" href="?menu=prestasi">Prestasi</a>
                    </li>
                    <li class="nav-item ms-3">
                    <a class="nav-link" href="?menu=kegiatan">Kegiatan</a>
                    </li>
                    <li class="nav-item ms-3">
                    <a class="nav-link" href="?menu=kontak">Kontak</a>
                    </li>
                </ol>
            </div>
        </nav>
        <section>
            <?php 
                if (isset($_GET['menu'])) {
                    $isi=$_GET['menu'];
                        
                    if ($isi == "sejarah") {
                        require_once "pages/sejarah.php";
                    }
                    if ($isi == "profil") {
                        require_once "pages/profil.php";
                    }
                    if ($isi == "jurusan") {
                        require_once "pages/jurusan.php";
                    }
                    if ($isi == "kegiatan") {
                        require_once "pages/kegiatan.php";
                    }
                    if ($isi == "prestasi") {
                        require_once "pages/prestasi.php";
                    }
                    if ($isi == "kontak") {
                        require_once "pages/kontak.php";
                    }
                } else {
                    require_once "pages/profil.php";
                }
                if (isset($_POST['tombol'])) {
                    $nama = $_POST['nama'];
                    $pesan = $_POST['pesan'];
                    $email = $_POST['email'];

                    echo $nama;
                    echo "<br>";
                    echo $pesan;
                    echo "<br>";
                    echo $email;
                }
                
            ?>
        </section>
        <footer class="bg-dark text-white text-center py-3">
            <p class="mb-0">web ini dibuat oleh Tsabitah Asilah Najwa</p>
        </footer>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>