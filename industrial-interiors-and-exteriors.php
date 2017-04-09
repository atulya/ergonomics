<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ERGONOMICS | Industrial Interiors and Exteriors</title>
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
            <h2 class="wow fadeInUp" data-wow-delay="0.5s">Industrial Interiors and Exteriors </h2>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery section -->
    <section class="parallax-section">
      <div class="container">
        <div class="row">
          <div id="tabs-container">
            <ul class="tabs-menu">
              <li class="current"><a href="#tab-1">Industrial Interior Exterior</a></li>
            </ul>
            <div class="tab">
              <div id="tab-1" class="tab-content">
                <div class="offerPage">
                  <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="active item">
                        <img src="images/industrial-interior-exterior/1.jpg" class="img-responsive" alt="">
                      </div>
                      <div class="item">
                        <img src="images/industrial-interior-exterior/2.jpg" class="img-responsive" alt="">
                      </div>
                      <div class="item">
                        <img src="images/industrial-interior-exterior/3.jpg" class="img-responsive" alt="">
                      </div>
                      <div class="item">
                        <img src="images/industrial-interior-exterior/4.jpg" class="img-responsive" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include "contactForm.php" ?>
    <?php include "footer.php"; ?>
    <?php include "assetsJs.php"; ?>
    <script>
      $('.carousel').carousel({
        interval: 2000,
        pause: 'none'
      })
    </script>
  </body>
</html>
