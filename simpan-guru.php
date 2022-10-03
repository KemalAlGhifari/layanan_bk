<?php 
    include "koneksi.php";
    $foto = $_FILES['foto_guru']['name'];
    $file_tmp = $_FILES['foto_guru']['tmp_name'];
    $nama = $_POST['nama_guru'];
    $profile = $_POST['profile_guru'];

    move_uploaded_file($file_tmp, 'foto/'.$foto);
    $query = "INSERT INTO `tb_guru` VALUES (NULL, '$nama', '$foto', '$profile');";
    mysqli_query($koneksi, $query)
    or die("SQL Error");
    header("location:table-gurubk.php")
?>