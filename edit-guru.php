<?php
    include "koneksi.php";

    if(isset($_POST['editt'])){
        $id_guru = $_POST['id_guru'];
        $nama_guru = $_POST['nama_guru'];
        $profile = $_POST['profile_guru'];
        $sql = "UPDATE `tb_guru` SET `nama_guru` = '$nama_guru', `profile_guru` = '$profile' WHERE `tb_guru`.`id_guru` = $id_guru;";
        $query = mysqli_query($koneksi,$sql);
        if($query){
            header('Location: table-gurubk.php');
        }else{
            header('Location: edit-guru.php.php?status=gagal');
        }
    }
?>