<?php 

    require_once "../function.php";

    $sql = "DELETE FROM dbkategori WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $sql);

    header("location:http://localhost/phpsmk/restoran/kategori/select.php");


?>