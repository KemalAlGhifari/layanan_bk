<?php 
    include "koneksi.php";
    if(isset($_POST['jadwal'])){
        $id_murid = $_POST['id_murid'];
        $nama_murid = $_POST['nama_murid'];
        $kelas_murid = $_POST['kelas_murid'];
        $topik = $_POST['topik_konseling'];
        $fotoguru = $_POST['foto_guru'];
        $namaguru = $_POST['nama_guru'];
        $sql = "INSERT INTO `jadwal` (`id_murid`, `nama_guru`, `nama_murid`, `kelas_murid`, `topik_konseling`) VALUES (NULL, '$namaguru', '$nama_murid', '$kelas_murid', '$topik');";
        $foto = $_FILES['foto_guru']['name'];
        $file_tmp = $_FILES['foto_guru']['tmp_name'];
        $nama = $_POST['nama_guru'];
        $profile = $_POST['profile_guru'];
        $crisp = $_POST['crisp'];
    
        move_uploaded_file($file_tmp, 'foto/'.$foto);
        $query = "INSERT INTO `jadwalguru` VALUES (NULL, '$nama', '$fotoguru', '$profile','$crisp');";
        mysqli_query($koneksi, $query)
        or die("SQL Error");
        header("location:table-gurubk.php");
        
        $query = mysqli_query($koneksi,$sql)
        or die("SQL Error");
        header("location:landing.php");
        }
    
?>