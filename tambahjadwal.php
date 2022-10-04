<?php 
    include "koneksi.php";
    if(isset($_POST['simpan'])){
        $id_murid = $_POST['id_murid'];
        $nama_murid = $_POST['nama_murid'];
        $kelas_murid = $_POST['kelas_murid'];
        $topik = $_POST['topik_konseling'];
        $sql = "INSERT INTO `jadwal` (`id_murid`, `nama_murid`, `kelas_murid`, `topik_konseling`)VALUES (NULL, '$nama_murid', '$kelas_murid', '$topik');";
        $query = mysqli_query($koneksi,$sql);
        if($query){
            header('location :landing.php');
        }else{
            echo "error sql";
        }
    }
?>