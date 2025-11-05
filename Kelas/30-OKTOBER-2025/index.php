<!-- Form Zodiak -->
<form action="" method="post">
    Tanggal:
    <input type="number" name="tanggal" placeholder="masukan tanggal"> <br>
    Bulan:
    <input type="number" name="bulan" placeholder="masukan bulan"> <br>

    <input type="submit" name="kirim" value="Zodiak anda..">
</form>

<?php 
    if (isset($_POST['kirim'])) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];

        zodiak($bulan,$tanggal);
    }
?>

<!-- Form Angka -->

<form action="" method="post">
    a:
    <input type="number" name="a" placeholder="Angka A"> <br>
    b:
    <input type="number" name="b" placeholder="Angka B"> <br>

    <input type="submit" name="hitung" value="tambah">
    <input type="submit" name="hitung" value="kurang">
    <input type="submit" name="hitung" value="kali">
    <input type="submit" name="hitung" value="bagi">
</form>

<?php 
    if (isset($_POST['hitung'])) {
        $hitung = $_POST['hitung'];
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($hitung == 'tambah') {
            echo "Hasil Penjumlahan dari $a + $b adalah: <br>";
            echo $a + $b;
        }

        if ($hitung == 'kurang') {
            echo "Hasil Pengurangan dari $a - $b adalah: <br>";
            echo $a - $b;
        }

        if ($hitung == 'kali') {
            echo "Hasil Perkalian dari $a * $b adalah: <br>";
            echo $a * $b;
        }

        if ($hitung == 'bagi') {
            echo "Hasil Pembagian dari $a / $b adalah: <br>";
            echo $a / $b;
        }
    }
?>

<?php 

    // function belajar() {
    //     echo "Hari ini saya belajar function";
    // }

    // belajar();

    function cekTanggal($tanggal) {

        if ($tanggal > 0 && $tanggal < 32) {
            return true;
        } else {
            return false;
        }
    }

    cekTanggal(1);
    cekTanggal(0);
    cekTanggal(100);

    // $tanggal = 24;
    // $bulan = 2;

    

    function zodiak($bulan,$tanggal) {
        if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
            if ($bulan == 1) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Capricorn";
                }else {
                    echo "Zodiak anda Aquarius";
                }
            }
            if ($bulan == 2) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Aquarius";
                }else {
                    echo "Zodiak anda Pisces";
                }
            }
            if ($bulan == 3) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Pisces";
                }else {
                    echo "Zodiak anda Aries";
                }
            }
            if ($bulan == 4) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Aries";
                }else {
                    echo "Zodiak anda Taurus";
                }
            }
            if ($bulan == 5) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Taurus";
                }else {
                    echo "Zodiak anda Gemini";
                }
            }
            if ($bulan == 6) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Gemini";
                }else {
                    echo "Zodiak anda Cancer";
                }
            }
            if ($bulan == 7) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Cancer";
                }else {
                    echo "Zodiak anda Leo";
                }
            }
            if ($bulan == 8) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Leo";
                }else {
                    echo "Zodiak anda Virgo";
                }
            }
            if ($bulan == 9) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Virgo";
                }else {
                    echo "Zodiak anda Libra";
                }
            }
            if ($bulan == 10) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Libra";
                }else {
                    echo "Zodiak anda Scorpio";
                }
            }
            if ($bulan == 11) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Scorpio";
                }else {
                    echo "Zodiak anda Sagitarius";
                }
            }
            if ($bulan == 12) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda Sagitarius";
                }else {
                    echo "Zodiak anda Capricorn";
                }
            }
        }else {
            echo "tanggal atau bulan salah";
        }
    }

    // zodiak(1, 5);
    // zodiak(12, 10);
    // zodiak (5, 20);

    function cekBulan($bulan) {
        if ($bulan > 0 && $bulan < 13) {
            return true;
        }else {
            return false;
        }
    }

    // cekBulan(0);

    // if (cekBulan(1) && cekTanggal(0)) {
    //     echo "Bulan atau Tanggal benar";
    // }else {
    //     echo "Bulan atau Tanggal salah";
    // }

    function luasPersegiPanjang($p,$l) {
        $luas = $p * $l;
        return $luas;
    }

    $p = 55;
    $l = 33;
    $t = 115;

    // echo "Volume balok dengan panjang $p,lebar $l, dan tinggi $t adalah";
    // echo luasPersegiPanjang($p,$l) * $t;


    // function penjumlahan($c,$d) {
    //     $tambah = $c + $d;
    //     return $tambah;
    // }

    // $c = 15;
    // $d = 30;

    // echo "Hasil penjumlahan dari $c dan $d adalah ";
    // echo penjumlahan($c,$d);
    // echo "<br>";

    // function pengurangan($a,$b) {
    //     $kurang = $a - $b;
    //     return $kurang;
    // }

    // $a = 30;
    // $b = 10;

    // echo "Hasil Pengurangan dari $a dan $b adalah ";
    // echo pengurangan($a,$b);
    // echo "<br>";

    // function perkalian($e,$f) {
    //     $kali = $e * $f;
    //     return $kali;
    // }

    // $e = 9;
    // $f = 7;

    // echo "Hasil Perkalian dari $e dan $f adalah ";
    // echo perkalian($e,$f);
    // echo "<br>";

    // function pembagian($g,$h) {
    //     $bagi = $g / $h;
    //     return $bagi;
    // }

    // $g = 60;
    // $h = 4;

    // echo "Hasil Pembagian dari $g dan $h adalah ";
    // echo pembagian($g,$h);

?>