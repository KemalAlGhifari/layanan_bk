<?php 
include "koneksi.php";
$id_guru = $_GET['id_guru'];
$sql = "SELECT * FROM tb_guru WHERE id_guru='$id_guru'";
$query = mysqli_query($koneksi, $sql);
$bk = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kue</title>
    <link rel="stylesheet" href="styleformedit_regular.css">

    <!-- icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- link css side-bar -->
    <link rel="stylesheet" href="styletambah-guru.css">

    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

    <!-- link googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Montserrat:wght@400;700&family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- ini sidebar -->
    <div class="sidebar">
        <div class="dashboard">
            <i class="fa-solid fa-circle-user fa-2x"></i>
            <h2>ADMIN</h2>
        </div>

        <div class="list_menu">
            <ul>
              <li><iconify-icon icon="ph:student" style="color: white; margin-left: 40px" width="22" height="22"></iconify-icon><a href="table-gurubk.php">DATA GURU BK</a></li>
              <li><iconify-icon icon="mdi:timetable" style="color: white; margin-left: 40px" width="22" height="22"></iconify-icon><a href="table-jadwal.php">JADWAL</a></li>
          </ul>
        </div>
    </div>

    <div class="judul">
        <p>EDIT DATA GURU</p>
    </div>
    <!-- ini konten kanan -->
    <div class="kotak-kanan">
        <form enctype="multipart/form-data" action="edit-guru.php" method="post">
        <table>
            <tr>
                <td><input value="<?php echo $bk['id_guru'] ?>" class="input" type="hidden" name="id_guru" required="required"></td>
            </tr>

            <tr>
            <td><Label>Nama Guru</Label></td>
            </tr>
            <tr>
                <td><input autocomplete="off" value="<?php echo $bk['nama_guru'] ?>" class="input" type="text" name="nama_guru" required="required"></td>
            </tr>

            <tr>
            <td><label>Profile Guru</label></td>
            </tr>
            <tr>
                <td><input autocomplete="off" value="<?php echo $bk['profile_guru'] ?>" class="input" type="text, number" name="profile_guru" required="required"></td>
            </tr>
        </table>
        <input type="submit" name="editt" value="edit" class="btn-simpan">
        </form>
    </div>
</body>
</html>