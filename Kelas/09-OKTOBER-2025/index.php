belajar php 
<h1>Saya Belajar PHP</h1>
<?php 

$nama = "Tsabitah Asilah Najwa";
$kelas = "10 RPL";
$umur = "16 Tahun";
$alamat = "Cemengkapuk Sidoarjo";
$hobi = "Mendaki";
$citacita = "Menjadi orang sukses";
$enter = "<br>";

echo $nama;
echo $enter;

echo $kelas;
echo $enter;

echo $umur;
echo $enter;

echo $alamat;
echo $enter;

echo $hobi;
echo $enter;

echo $citacita;
echo $enter;

// echo "<h1>saya belajar php</h1>";
// echo "Saya Kelas:";
// echo 12 ,"<br>";
// echo "Tsabitah Asilah Najwa"; echo "<br>";
// echo "10 RPL"; echo "<br>";
// echo "16 Tahun"; echo "<br>";
// echo "Cemengkapuk RT.09 RW.04 Cemengkalang Sidoarjo"; echo "<br>";
// echo "Editing,mendaki,fotografi"; echo "<br>";
// echo "menjadi orang sukses"; echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Awa</title>
</head>
<body>
    <div>
        <h1>Identitas</h1>
        <tbody>
            <tr>
                <td>Nama :</td>
                <td><?php $nama ?></td>
            </tr>
            <tr>
                <td>Kelas :</td>
                <td><?php $kelas ?></td>
            </tr>
            <tr>
                <td>Umur :</td>
                <td><?php $umur ?></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><?php $alamat ?></td>
            </tr>
            <tr>
                <td>Hobi :</td>
                <td><?php $hobi ?></td>
            </tr>
            <tr>
                <td>Cita-cita :</td>
                <td><?php $citacita ?></td>
            </tr>
        </tbody>
    </div>
</body>
</html>