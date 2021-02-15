<?php

include 'koneksi.php';

$data = $conn->prepare('SELECT * FROM companies');
$data->execute();
$companies = $data->fetchAll();

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Halaman Menu Utama</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Pesona Indonesia</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="colappse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#pricing">Pricing</a>
              <a class="nav-item nav-link" href="#gallery">Galerry</a>
              <a class="nav-item nav-link" href="#about">About</a>
      <div class="d-flex">
        <a href="halaman-login.php" class="btn btn-primary">Login</a>
      </div>
    </div>
  </nav>
  <!--  -->

  <!-- jumbotron -->
  <div id="background">
        <div class="jumbotron">
          <p> Indonesia memiliki keragaman alam dan budaya yang tak tertandingi. Ada begitu banyak pengalaman menanti untuk Anda coba 
            dan destinasi yang menunggu untuk Anda jelajahi.</p>
          <h1>INDONESIA</h1>
          <p><a href="#" class="btn btn-primary" role="button">EXPLORE</a></p>
        </div>
      </div>
      <!-- jumbotron -->

  <!-- container atas -->
  <div id="home">
        <div class="isi">
          <div class="container atas">
            <h1>Destinasi Pilihan</h1>
            <p><strong> Temukan pengalaman unik yang sesuai untuk Anda</strong></p>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/pantai.jpg" width="300px">
                <h3>PANTAI</h3>
                <p class="text-justify"><strong>Pink Beach</strong>, Pantai ini memiliki pasir lembut berwarna merah muda. Perpaduan antara warna pasir lembut dan cantik serta air[...]</p>
                <a href="#" class="btn btn-primary" data-target="#info1"data-toggle="modal" >Detail</a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/gunung.jpg" width="250px">
                <h3>PEGUNUNGAN</h3>
                <p class="text-justify"><strong>Gunung Rinjani</strong>, gunung yang berlokasi di Pulau Lombok, Nusa Tenggara Barat. Gunung yang merupakan gunung ber[...]</p>
                <a href="#" class="btn btn-primary" data-target="#info2"data-toggle="modal" >Detail</a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/candi.jpg" width="290px">
                <h3>SEJARAH</h3>
                <p class="text-justify"><strong>Borobudur</strong>, adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. borobudur merupa[...]</p>
                <a href="#" class="btn btn-primary" data-target="#info3"data-toggle="modal" >Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- container atas -->
    
      <!--modal-->
      <div class="modal fade" id="info1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Informasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-borderless">
                            <tr>
                            <p class="text-justify">Pantai ini memiliki pasir lembut berwarna merah muda. Perpaduan antara warna pasir lembut dan cantik serta air laut yang jernih. pink beach juga mempunyai pemandangan bawah laut yang mengagumkan. Warna pink pada pasirnya terbentuk karena butir-butir asli warna putih pasir bercampur dengan serpihan karang merah muda. Bias sinar matahari dan terpaan air laut menambah semakin jelas terlihat warna pink pantai tersebut.Pantai ini begitu tenang dan hanya memiliki ombak yang kecil sehingga membuat wisatawan lebih nyaman ketika bermain disana. Keindahan Pantai Pink pun terlihat sempurna dengan hamparan bukit di sekelilingnya. Di sisi kiri ada bukit dengan padang rumput yang luas dan dari bukit inilah pemandangan Pantai Pink terlihat sangat indah. Selain itu, ada juga tanjung yang eksotis di sisi kanan dengan gazebo yang memang disediakan di atasnya.
                            </p></tr>
                            <tr>
                              <th>Lokasi</th>
                              <td>:  Terletak di desa Sekaroh, kecamatan Jerowaru, kabupaten Lombok Timur, kota Mataram, Nusa Tenggara Barat.</td>
                          </tr>
                          <tr>
                            <th>Tiket</th>
                            <td>:  Rp.50.000 - 50.000 /orang</td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">KEMBALI</button>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    
    <div class="modal fade" id="info2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Informasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                      <table class="table table-borderless">
                          <tr>
                          <p class="text-justify">
                            Gunung Rinjani adalah gunung yang berlokasi di Pulau Lombok, Nusa Tenggara Barat. Gunung yang merupakan gunung berapi kedua tertinggi di Indonesia dengan ketinggian 3.726 m dpl serta terletak pada lintang 8º25' LS dan 116º28' BT ini merupakan gunung favorit bagi pendaki Indonesia karena keindahan pemandangannya. Gunung ini merupakan bagian dari Taman Nasional Gunung Rinjani yang memiliki luas sekitar 41.330 ha dan ini akan diusulkan penambahannya sehingga menjadi 76.000 ha ke arah barat dan timur.
                            Gunung Rinjani dengan titik tertinggi 3.726 m dpl, mendominasi sebagian besar pemandangan Pulau Lombok bagian utara. Di sebelah barat kerucut Rinjani terdapat kaldera dengan luas sekitar 3.500 m × 4.800 m, memanjang kearah timur dan barat. Di kaldera ini terdapat Segara Anak (segara= laut, danau) seluas 11.000.000 m persegi dengan kedalaman 230 m. Air yang mengalir dari danau ini membentuk air terjun yang sangat indah, mengalir melewati jurang yang curam. Di Segara Anak banyak terdapat ikan mas dan mujair sehingga sering digunakan untuk memancing. Bagian selatan danau ini disebut dengan Segara Endut.  
                          </p></tr>
                          <tr>
                            <th>Lokasi</th>
                            <td>: Berlokasi di Pulau Lombok, Nusa Tenggara Barat.</td>
                        </tr>
                        <tr>
                          <th>Tiket</th>
                          <td>: Rp.5.000./orang</td>
                      </tr>
                      </table>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">KEMBALI</button>
          </div>
      </div>
      </div>
    </div>
    </div>
    </div>
      
    <div class="modal fade" id="info3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Informasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                      <table class="table table-borderless">
                          <tr>
                          <p class="text-justify">
                          Adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta. Candi berbentuk stupa ini didirikan oleh para penganut agama Buddha Mahayana sekitar tahun 800-an Masehi pada masa pemerintahan wangsa Syailendra. Borobudur adalah candi atau kuil Buddha terbesar di dunia, sekaligus salah satu monumen Buddha terbesar di dunia.
                          Monumen ini terdiri atas enam teras berbentuk bujur sangkar yang di atasnya terdapat tiga pelataran melingkar, pada dindingnya dihiasi dengan 2.672 panel relief dan aslinya terdapat 504 arca Buddha. Borobudur memiliki koleksi relief Buddha terlengkap dan terbanyak di dunia. Stupa utama terbesar teletak di tengah sekaligus memahkotai bangunan ini, dikelilingi oleh tiga barisan melingkar 72 stupa berlubang
                          Borobudur kini masih digunakan sebagai tempat ziarah keagamaan, tiap tahun umat Buddha yang datang dari seluruh Indonesia dan mancanegara berkumpul di Borobudur untuk memperingati Trisuci Waisak. Dalam dunia pariwisata, Borobudur adalah objek wisata tunggal di Indonesia yang paling banyak dikunjungi wisatawan.
                        </p></tr>
                          <tr>
                            <th>Lokasi</th>
                            <td>: Berada di Magelang, Provinsi Jawa Tengah.</td>
                        </tr>
                        <tr>
                          <th>Tiket</th>
                          <td>: Rp.35.000 - 75.000 /orang</td>
                      </tr>
                      </table>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">KEMBALI</button>
          </div>
      </div>
      </div>
    </div>
    </div>
    </div>
    
      <!-- container bawah -->
      <div id="pricing">
      <div class="container bawah">
        <h1>The Culture of Indonesia</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-14 col-xs-14"><img class="img-circle" src="assets/img/budaya (1).jpg" width="150px">
            <h3>Tari</h3>
            <p class="text-center"><strong>Tarian Indonesia mencerminkan kekayaan dan keanekaragaman suku bangsa dan budaya Indonesia</strong></p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-14 col-xs-14"><img class="img-circle" src="assets/img/budaya (2).jpg" width="150px">
            <h3>Kuliner</h3>
            <p class="text-center"><strong>Masakan Indonesia adalah salah satu tradisi kuliner yang paling kaya di dunia, dan penuh dengan cita rasa yang kuat.</strong></p>
          </div><div class="col-lg-4 col-md-4 col-sm-14 col-xs-14"><img class="img-circle" src="assets/img/budaya (3).jpg" width="150px">
            <h3>Kesenian</h3>
            <p class="text-center"><strong>kebudayaan Indonesia untuk mengetahui bagaimana sejarah perjanan hidup bangsa Indonesia itu sendiri.</strong></p>
          </div>
        </div>
      </div>
    </div>
      <!-- container bawah -->
    
    
      <!-- Abbout -->
      <div id="about">
        <div class="container footer">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2>About Us</h2>
          </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <h2>Newsletter Subscription</h2>
              <div class="input-group input-group-lg">
                <input type="text" placeholder="Your Email...">
                <div class="input-group-btn">
                  <button class="btn btn-primary" type="submit">Subscribe </button>
                </div>
              </div>
        </div>
      </div>
    </div>
      <!-- about -->
    
      <!-- footer -->
      <div id="footer">
        <div class="container">
          <h5 class="text-center">@Copyright by 18111169_WidyaMayasariFauziah_TIFRP18CIDA_UASWEB1. © 2021</h5>
        </div>
      </div>
      <!-- penutup footer -->
    
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    </body>
    
    </html>