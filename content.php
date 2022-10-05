<?php 
include "koneksi.php";
$id_guru = $_GET['id_guru'];
$sql = "SELECT * FROM tb_guru WHERE id_guru=$id_guru";
$query = mysqli_query($koneksi,$sql);
$card = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile BK</title>

    <!-- style css -->
    <link rel="stylesheet" href="stylecontent_profile-bk.css">

    <!-- font iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <style>
            body{
                font-family: 'Poppins', sans-serif;
            }
            .footer{
  width: 100%;
  height: 300px;
  background-color: white;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: #01205e;
  color: white;
}

.footer p:first-child{
  font-size: 30px;
  font-weight: bold;
  margin-bottom: 0px;
}

.footer p:nth-child(2){
  width: 700px;
  text-align: center;
  font-size: 20px;
  font-weight: 100;
}

.list-icon{
  display: flex;
  width: 250px;
  justify-content: space-evenly; 
}

.list-icon div{
  width: 40px;
  height: 40px;
  background-color: aliceblue;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  margin-top: 20px;
  color: black;
}
        </style>
</head>
<body>
    <!-- ini navbar -->
    <nav>
        <a href="landing.php"><iconify-icon icon="ic:baseline-navigate-next" rotate="180deg"  style="cursor: pointer; font-size: 25px;"></iconify-icon></a>
        <p id="tulisan-nav">Detail BK</p>
    </nav>

    <div class="biru" >

    </div>
    <div class="content">
        <div class="gambar">
            <img src="foto/<?php echo $card['foto_guru'] ?>" alt="foto_ricky">
        </div>

        <div class="kotak1">
            <div class="wadah-gambar">
            </div>
        </div>

        <div class="kotak2">
            <div class="melayani">
                <p id="bk"><?php echo $card["nama_guru"] ?></p>
                <hr>
                <div class="melayani-via">
                    <p id="via">Melayani Via :</p>
                    <iconify-icon icon="bi:chat-dots" style="margin-top: 0.4%;"></iconify-icon>
                    <p>Chat</p>
                </div>
                <hr>
            </div>
            <div class="profile-ricky">
                <p id="judul-profile">Profile <?php echo $card["nama_guru"]  ?></p>
                <p id="deskripsi"><?php echo $card["profile_guru"] ?></p>
            </div>

            <div class="input">
                <a href="form_jadwal.php?id_guru=<?php echo $card['id_guru'] ?>"><input type="button" value="Buat Jadwal dengan <?php echo $card['nama_guru'] ?>"></a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>StarKonseling</p>
        <p>StarKonseling merupakan website untuk membantu para murid SMK Taruna Bhakti dalam permasalahan didalam sekolah maupun diluar sekolah.</p>

        <div class="list-icon">
            <div><i class="fa-brands fa-facebook-f"></i></div>
            <div><i class="fa-brands fa-whatsapp"></i></div>
            <div><i class="fa-brands fa-instagram"></i></div>
            <div><i class="fas fa-inbox"></i></div>
        </div>
    </div>
</body>
</html>