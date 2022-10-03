<?php 
    include "koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE id_guru = '$_GET[id_guru]'");
    $row = mysqli_fetch_array($data);

    $foto = $row['foto_guru'];
    if(file_exists('foto/'.$foto)){
        unlink('foto/'.$foto);
    }
    $query = "DELETE FROM tb_guru WHERE id_guru = '$_GET[id_guru]'";
    mysqli_query($koneksi,$query) or die ("sql error");
    header ('location:table-gurubk.php');
?>