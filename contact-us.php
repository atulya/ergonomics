<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ERGONOMICS | Home</title>
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
    <!-- <section id="map" class="parallax-section">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1251.258476985588!2d73.80532893308049!3d18.511667057664773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfb06a8ec7b1%3A0xeece2069ce93bb25!2sKanchanban+Society!5e0!3m2!1sen!2sin!4v1488605381185" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section> -->
    <section id="video" class="parallax-section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8 col-sm-12">
            <h2 class="wow fadeInUp" data-wow-delay="0.5s">Talk to us</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- About section -->
    <section id="about" class="parallax-section">
      <div class="container">
        <div class="row">
          <div class="clearfix"></div>
          <div id="contact" class="wow fadeInUp" data-wow-delay="0.5s">
            <!-- flexslider -->
            <form id="contact-form" name="contactform" method="post" action="send_form_email.php">
              <div class="col-md-6">
                <input class="form-control" type="text" placeholder="First Name" name="first_name" maxlength="50" size="30">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" placeholder="Last Name" name="last_name" maxlength="50" size="30">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" placeholder="Email" name="email" maxlength="80" size="30">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" placeholder="Phone" name="telephone" maxlength="30" size="30">
              </div>
              <div class="col-md-6">
              <textarea class="form-control"  name="comments" placeholder="Let us know " maxlength="1000" cols="25" rows="6"></textarea>
              </div>
              <div class="col-md-6">
              <input class="btn btn-primary" type="submit" value="&#xf003; Send">
              </div>
            </form>
          </div>
          <div class="wow fadeInUp col-md-7 col-sm-12" data-wow-delay="0.9s">
            <form action="">
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php include "contactForm.php" ?>
    <?php include "footer.php"; ?>
    <?php include "assetsJs.php"; ?>
  </body>
</html>
