<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pelayanan Masyarakat</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>
  
  <body class="size-1140">
     <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo White Version -->
            
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?module=profil">Profile</a></li>
            <!--<li><a href="#">Informasi</a></li>-->
            <li><a href="index.php?module=kontak">Contact</a></li>
            <li><a href="index.php?module=register">Register</a></li>
            <li><a href="index.php?module=login">Login</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="img/header.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
                    <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Polsek Depok Timur <br> Daerah Iatimewa Yogyakarta</h1>
                    <div class="s-12 m-10 l-8 center"></div>
                    <div class="line">
                      <div class="s-12 m-12 l-3 center">
                        <img src="img/polri.png">
                      </div>       
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      
      <!-- Section 1 -->

      
      <!-- Section 1 -->
      
      
      <!-- Section 2 -->
      
      
      <!-- Section 3 -->
      
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 -->
      
      
      <!-- Section 5 --> 
<?php
          if (@$_GET['module'] == "") { 

     
    ?>
    <section class="section background-dark">
        <div class="line">
         Polsek Depok Timur beralamat di Jl. Padjajaran, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281. Polsek yang berada di bawah kepemimpinan Polda ini memiliki dua pangkat pimpinan. Ada polsek yang dipimpin oleh Polisi berpangkat Ajun Komisaris Besar Polisi (AKBP). Selain itu, ada juga Polsek yang dipimpin oleh Polisi berpangkat Ajun Komisaris Polisi (AKP). Cakupan wilayah Polsek ini berada di tingkat kecamatan yang di mana semakin dekat dengan masyarakat.
        </div>
      </section>
    <?php
    
    }else{
    
    if($_GET["module"]){
  include_once($_GET["module"].".php");
}
    }
          ?>
    
      
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">Contact Us</p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">     
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2603774473723!2d110.4131874138029!3d-7.762187279131888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59a19b0b3c1d%3A0x25df91e47423b2!2sPolsek%20Depok%20Timur!5e0!3m2!1sid!2sid!4v1672635045535!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
        
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Alamat</h3>
                  <p>Jl. Padjajaran, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281<br>
                     
                  </p>               
                </div>
               
                
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Phone Numbers</h3>
                  <p>0274-881-557<br>
                  </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Copyright 2023 | E-Goverment Polsek Depok Timur</p>
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>