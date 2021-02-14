<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:Login.php');
}
?>


<html>
    <head>
        <title>Menu</title>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body>
        
        <div class="container">
            <img src="image/logo.png" class="rounded" width="327" height="80" style="margin-top: 20px;">
        </div>

            <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-top: 20px;">
                <img src="image/Logo Pertamina1.png" alt="logo" width="60px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <li class="nav-item" style="margin-left: 10px;">
                        <a class="navbar-brand">Menu Utama</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Keluar</a>
                    </li>    
                  </ul>
                  
                </div> 
                <ul class="navbar-nav" style="text-align: left;">
                    <li class="navbar-brand" >
                    <p>Maulana Yusuf           <i class="fas fa-user" style="margin-left: 10px;"></i></p>
                    
                    </li>
                </ul> 
              </nav>

              <div class="container" style="margin-top:30px">
                <div class="row">
                    <div class="col-sm-12" style="text-align: center;">
                    <div class="jumbotron jumbotron-fluid" >
                        <div class="container-fluid" >
                        <h5><a href="Profil.php" class="btn btn-link">RIWAYAT SINGKAT PERUSAHAAN</a></h5>
                            <div class="col-sm-12" style="text-align: justify;">
                            <p>Lebih dari enam dekade menyediakan energi untuk seluruh penjuru negeri dan sejumlah wilayah di luar negeri, membuat Pertamina menjadi bagian yang tidak terpisahkan dari kemajuan Indonesia saat ini.
                                Komitmen untuk menyediakan energi dan mengembangkan energi baru dan terbarukan adalah tonggak yang dipegang kokoh oleh Pertamina hingga saat ini. Komitmen ini dibuktikan dengan penyediaan produk yang lebih berkualitas guna memenuhi kebutuhan konsumen akan produk yang unggul. Kini saatnya, Pertamina memantapkan langkah, menyongsong tantangan yang membentang dengan penuh optimisme guna menciptakan pertumbuhan bisnis Perusahaan yang berkelanjutan melalui investasi dan optimalisasi bisnis agar terus tumbuh sesuai dengan harapan seluruh pemangku kepentingan......</p>
                            </div>
                        </div>
                    </div>
                    <h4 style="margin-bottom: 20px;">VISI,MISI dan Tujuan</h4>
                    <img src="image/visi.jpg" class="container-fluid" style="margin-bottom: 30px;" >
                    </div>
                        <div class="col-sm-12" >
                            <div class="jumbotron jumbotron-fluid" >
                                <div class="container-fluid" style="text-align: center;" >
                                <h4 style="margin-bottom: 20px;">MAKNA LOGO PERTAMINA</h4>
                                <img src="image/logo.png" class="rounded" width="327" height="80" style="margin-bottom: 20px;">
                                </div>
                                <div class="col-sm-12" style="margin-left: 40px;">
                                    <p>Makna dari logo Pertamina adalah:</p>
                                    <div class="col-sm-12">
                                        <p>1. Warna biru memiliki arti andal, dapat dipercaya dan bertanggung jawab.</p>
                                        <p>2. Warna hijau memiliki arti sumber daya energi yang berwawasan lingkungan.</p>
                                        <p>3. Warna merah memiliki arti keuletan dan ketegasan serta keberanian dalam menghadapi berbagai macam kesulitan.</p>
                                    </div>
                                    <p>Simbol grafis memiliki arti:</p>
                                    <div class="col-sm-12" >
                                        <p>1. Bentuk anak panah menggambarkan aspirasi organisasi Pertamina untuk senantiasa bergerak ke depan, maju dan
                                            progresif. Simbol ini juga mengisyaratkan huruf "P" yakni huruf pertama dari Pertamina.</p>
                                        <p>2. Tiga elemen berwarna melambangkan pulau-pulau dengan berbagai skala yang merupakan bentuk negara
                                            Indonesia.</p>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
        
        <div class="jumbotron text-center" style="margin-bottom: 0;">
            <div class="col-md-12" >
                <h7>@Copyright by 18111088_MaulanaYusuf_TIFRP18CNSA_UASWEB1</h7>
            </div>
        </div>
    </body>
</html>