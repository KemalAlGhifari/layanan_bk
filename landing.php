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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>StarKonseling</title>
    <!--====== Favicon Icon ======-->
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
::-webkit-scrollbar{
  display: none;
}

       /* konsulor-start */
  .container{
position: relative;
}

.container .card{
position: relative;
width: 320px;
height: 450px;
background: #232323;
border-radius: 20px;
overflow: hidden;
}

.container .card:before{
content: '';
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-image: linear-gradient(to right, #5433FE, #5046FD, #3E87FA, #27D6F5);
clip-path: circle(150px at 80% 20%);
transition: 0.5s ease-in-out;
}

.container .card:hover:before{
clip-path: circle(300px at 80% -20%);
}

.container .card:after{
content: 'Konselor';
position: absolute;
top: 50%;
font-size: 5em;
font-weight: 800;
font-style: italic;
color: rgba(255,255,25,0.05)
}

.container .card .imgBx{
position: absolute;
top: 50%;
transform: translateY(-50%);
z-index: 1;
width: 100%;
height: 220px;
transition: 0.5s;
}

.container .card .imgBx img{
margin-top: 40px;
width: 270px;
}

.container .card .contentBx{
position: absolute;
bottom: 0;
width: 100%;
height: 100px;
text-align: center;
transition: 1s;
z-index: 10;
}

.container .card:hover .contentBx{
height: 420px;
}

.container .card .contentBx h2{
position: relative;
font-weight: 600;
letter-spacing: 1px;
color: #fff;
text-shadow: 2px 2px 4px #000000;
margin: 0;
}

.container .card .contentBx .size, .container .card .contentBx .color {
display: flex;
justify-content: center;
align-items: center;
padding: 8px 20px;
transition: 0.5s;opacity: 0;
visibility: hidden;
padding-top: 0;
padding-bottom: 0;
}

.container .card .contentBx a{
display: inline-block;
padding: 10px 20px;
background: #fff;
border-radius: 4px;
margin-top: 10px;
text-decoration: none;
font-weight: 600;
color: #111;
opacity: 0;
transform: translateY(50px);
transition: 0.5s;
margin-top: 300px;
}

.container .card:hover .contentBx a{
opacity: 1;
transform: translateY(0px);
transition-delay: 0.25s;

}

/* konsulor-end */

/* footer */
.footer{
  width: 100%;
  background-color: white;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: transparent;
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

    <!-- Header Section Start -->
    <header id="home" class="hero-area">
      <div class="overlay">
        <span></span>    
        <span></span>
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a style="padding: 20x; font-size: 40px; font-weight: 700; color: white;" href="index.html" class="navbar-brand">StarKonseling</a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#home">Home</a>
              </li>                                      
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Jadwal</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Konselor</a>
              </li>   
            </ul>
          </div>
        </div>
      </nav>  
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">StarKonseling</h2>
              <p>Kami menyediakan konsultasi untuk murid-murid yang memiliki masalah didalam lingkungan sekolah maupun diluar sekolah</p>
              <div class="header-button">
                <a href="#blog" rel="nofollow" target="_blank" class="btn btn-border-filled page-scroll">Buat Jadwal</a>
              </div>
            </div>
          </div>
        </div> 
      </div>             
    </header>
    <!-- Header Section End --> 


    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="team-text section-header text-center">  
              <div>   
                <h2 class="section-title">Jadwal Konseling  </h2>
              </div> 
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
           <!-- Start Row -->
        <?php while($card = mysqli_fetch_array($query2)){ ?>
        <div class="row" style="margin-right:0px; margin-left: 0;">
          <!-- Start Col -->
          <div class="col-lg-4 col-md-6 col-xs-12 blog-item" style="margin-bottom: 50px;">
            <!-- Blog Item Starts -->
            <div class="container">
              <div class="card">
                <div class="imgBx">
                  <img src="foto/<?php echo $card["foto_guru"] ?>">
                </div>
                <div class="contentBx">
                  <h2><?php echo $card["nama_guru"]?></h2>
                  <a href="jadwal.php?id_murid=<?php echo $card['id_murid']?>&id_guru=<?php echo $card['id_guru'] ?>">Konseling</a>
                </div>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
          <!-- End Col -->
        </div>
        <?php } ?>
        <!-- End Row -->
        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Team section End -->


    <!-- Blog Section -->
    <section id="blog" class="section" >
      <!-- Container Starts -->
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-text section-header text-center">  
              <div>   
                <h2 class="section-title">Pilih Konselor</h2>
                <div class="desc-text">
              </div> 
            </div>
          </div>
        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <?php while($card = mysqli_fetch_array($query)){ ?>
        <div class="row" style="margin-right:0px; margin-left: 0;">
          <!-- Start Col -->
          <div class="col-lg-4 col-md-6 col-xs-12 blog-item" style="margin-bottom: 50px;">
            <!-- Blog Item Starts -->
            <div class="container">
              <div class="card">
                <div class="imgBx">
                  <img src="foto/<?php echo $card["foto_guru"] ?>">
                </div>
                <div class="contentBx">
                  <h2><?php echo $card['nama_guru'] ?></h2>
                  <a href="content.php?id_guru=<?php echo $card['id_guru'] ?>">Selengkapnya</a>
                </div>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
          <!-- End Col -->
          
        </div>
        <?php } ?>
        <!-- End Row -->
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section id="footer-Content">
        <div class="container">
          <!-- Start Row -->
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
          <!-- End Row -->
        </div>
        <!-- Copyright Start  -->

        <div class="copyright">
          <div class="container">
            <!-- Star Row -->
            <div class="row">
              <div class="col-md-12">
                <div class="site-info text-center">
                  <p>Copyright 2022 by kelompok 3 (XI PPLG 1)</a></p>
                </div>              
                
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
      <!-- Copyright End -->
      </section>
      <!-- Footer area End -->
      
    </footer>
    <!-- Footer Section End --> 


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a> 

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>      
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/nivo-lightbox.js"></script>     
    <script src="js/jquery.magnific-popup.min.js"></script>     
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>
    
  </body>
</html>




