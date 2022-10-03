<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" href="styledashboard.css">

    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

    <!-- link googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Montserrat:wght@400;700&family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <!-- SIDEBAR -->
    <div class="sidebar">
      <div class="dashboard">
          <i class="fa-solid fa-circle-user fa-2x"></i>
          <h2>ADMIN</h2>
      </div>

      <div class="list_menu">
          <ul>
              <li><iconify-icon icon="ic:baseline-cake" style="color: white; margin-left: 40px;" width="20" height="20">h</iconify-icon><a href="table-gurubk.php">DATA GURU BK</a></li>
              <li><iconify-icon icon="wpf:wedding-cake" style="color: white; margin-left: 40px;" width="20" height="20"></iconify-icon><a href="table-jadwal.php">JADWAL</a></li>
          </ul>
      </div>
    </div>
    <!-- CONTENT-TABLE -->

    <div class="judul-content">
    <div class="judul">
        <p>DATA JADWAL KONSELING</p>
    </div>
    <div class="content">
        <a style="width: fit-content;" href="tambahdataguru.html"><button class="btn">Tambah</button></a>
        <div class="table_konten">
            <table>
                <thead>
                    <tr>
                        <th>ID Murid</th>
                        <th>Nama Murid</th>
                        <th>Kelas Murid</th>
                        <th>Topik Konseling</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                    $sql = "SELECT * from jadwal";
                    $query = mysqli_query($koneksi, $sql);

                    while ($jadwal = mysqli_fetch_array($query)) {
                    echo"
                    <tbody>
                        <tr>
                            <td>$jadwal[id_murid]</td>
                            <td style='width: 200px;'>$jadwal[nama_murid]</td>
                            <td>$jadwal[kelas_murid]</td>
                            <td>$jadwal[topik_konseling]</td>
                            <td>
                                <a href='formedit_bk.php?id_guru=".$jadwal['id_guru']."'><button class='btn-edit'><i class='fa-solid fa-pen-to-square fa'></i></button></a>
                            </td>
                        <tr>
                    <tbody>";
                    }
                ?>
            <table>
        <div>
    </div>
</body>
</html>