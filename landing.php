<?php 
include "koneksi.php";
$sql = "SELECT * FROM tb_guru";
$sql2 ="SELECT * FROM jadwal JOIN jadwalguru WHERE jadwal.nama_guru = jadwalguru.nama_guru";

$query = mysqli_query($koneksi,$sql);
$query2 = mysqli_query($koneksi,$sql2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelanding.css">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Archivo&family=Varta:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
</head>
<body>
<div class="hero-section">
        <nav>
          <ul>
            <li class="logo">StarKonseling</li>
            <li class="nav-link">Home</li>
            <li class="nav-link">About</li>
            <li class="nav-link">Contact</li>
          </ul>
        </nav>
        <div class="hero-text">
          <h1 class="header-text">StarKonseling</h1>
          <p>Kami menyediakan konsultasi untuk murid-murid yang memiliki masalah didalam lingkungan sekolah maupun diluar sekolah</p>
          <a href="#content2"><button>Buat jadwal</button></a>
        </div>
    </div>

    <div style="display: flex; text-align: center; justify-content: space-evenly; margin: 30px auto -80px;" >
      <div style="border: 1px none black; width: 40%;"><hr style="border:black solid;"></div>
      <div><h2>JADWAL KONSELING</h2></div>
      <div style="border: 1px none black; width: 40%;"><hr style="border:black solid;"></div>
     </div>

    <div class="isi-content1">  
      <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3b" style="display: flex;justify-content: center;text-align: center;">
          <!-- php -->         
          <?php while($card = mysqli_fetch_array($query2)){ ?>
            <div class="col" style="width:20%; background-color:#dbd8d8 ; border-radius:20px; padding-top: 10px; margin: 15px;">
              <img src="foto/<?php echo $card["foto_guru"] ?>" alt="Avatar" style="width:100% ;height: 300px;">
              <div class="container">
                <h4><b><?php echo $card["nama_guru"]?></b></h4>  
                <div><a href="jadwal.php?id_murid=<?php echo $card['id_murid']?>&id_guru=<?php echo $card['id_guru'] ?>"><button>konseling</button></a>
                  
                </div>
              </div>
          </div>                
          <?php } ?>
          <!-- php end -->
        </div>
      </div>
    </div>

    <div class="isi-content2" id="content2">
      <div class="container text-center">
        <div style="background-color: #DAED03; padding: 10px; border-radius:5px ; width: 30%; margin: 0 auto; position: relative; top: -40px; color: black;"><h2>GURU BK</h2></div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" style="display:flex ; text-align: center; justify-content: center;">
          <!-- php -->
          <?php while($card = mysqli_fetch_array($query)){ ?>
            <div class="col" style="width:20%;; background-color:#d2cfca ; border-radius:20px; padding-top: 10px; margin: 15px; ">
              <img src="foto/<?php echo $card["foto_guru"] ?>" alt="Avatar" style="width:100%; height: 300px;">
              <div class="container">
                <h4><b><?php echo $card['nama_guru'] ?></b></h4> 
                <div>
                <a href="content.php?id_guru=<?php echo $card['id_guru'] ?>"><button>selengkapnya</button></a>
                </div>
              </div>
          </div>
          <?php } ?>
            <!-- php end -->
            
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