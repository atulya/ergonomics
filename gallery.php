<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ERGONOMICS | Showcase</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?php include "assetsCss.php" ?>
  </head>
  <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <!-- Preloader section -->
    <div class="preloader">
      <div class="sk-spinner sk-spinner-pulse"></div>
    </div>
    <?php include "navigation.php"; ?>
    <section id="video" class="parallax-section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8 col-sm-12">
            <h2 class="wow fadeInUp" data-wow-delay="0.5s">Showcase</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- About section -->
    <section id="about" class="parallax-section">
      <div class="container">
        <div class="row">
          <!-- 2. Create links -->
          <div class="col-md-3">
            <a data-fancybox="gallery" href="images/industrial-interior-exterior/1.jpg"><img src="images/industrial-interior-exterior/1.jpg" width="250px" class="img-responsive" alt="industrial interior exterior"></a>
          </div>
          <div class="col-md-3">
            <a data-fancybox="gallery" href="images/industrial-interior-exterior/2.jpg"><img src="images/industrial-interior-exterior/2.jpg" width="250px" class="img-responsive" alt="industrial interior exterior"></a>
          </div>
          <div class="col-md-3">
            <a data-fancybox="gallery" href="images/industrial-interior-exterior/3.jpg"><img src="images/industrial-interior-exterior/3.jpg" width="250px" class="img-responsive" alt="industrial interior exterior"></a>
          </div>
          <div class="col-md-3">
            <a data-fancybox="gallery" href="images/industrial-interior-exterior/4.jpg"><img src="images/industrial-interior-exterior/4.jpg" width="250px" class="img-responsive" alt="industrial interior exterior"></a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
    <!-- 1. Add latest jQuery and fancyBox files -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
    <?php include "contactForm.php" ?>
    <?php include "footer.php"; ?>
    <?php include "assetsJs.php"; ?>
  </body>
</html>
