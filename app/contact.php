<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost:8080/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "lib.php"; ?>
  </head>
  <body>

    <!-- Navigation -->
    <?php include "menu.php" ?>

    <!-- Page Content -->
    <footer class="contact container">
      <div class="row">
        <div class="contact__inf col-xs-12 col-sm-6">
          <h2 id="contact" class="section">Liên Hệ Chúng Tôi</h2>

          <div class="contact-box"><i class="fa fa-home"></i>
            <b>Địa chỉ:</b>268-270 Pasteur, Q.3, TP.HCM
          </div>
          <div class="contact-box">
            <i class="fa fa-phone"></i> <b>Điện thoại:</b>(028) 38.20.20.21
          </div>
          <div class="contact-box">
            <i class="fa fa-clock-o"></i> <b>Giờ mở cửa:</b>9AM - 10PM.
          </div>
          <div class="social">
            <div class="social__link-and-icon">
              <span class="icon icon-facebook"></span><a class="social__link" href="javascript:void">Facebook<span class="social__link_underline"></span></a>

            </div>
            <div class="social__link-and-icon">
              <span class="icon icon-twitter"></span><a class="social__link" href="javascript:void">Twitter<span class="social__link_underline"></span></a>

            </div>
          </div>
           <div class="map-content">
<figure>
  <div id="googleMap" style="width:90%;height:600px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.315057011179!2d106.6865096148009!3d10.78716419231423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x841f888fea7e02d8!2sPOXI+Fashion!5e0!3m2!1sen!2s!4v1463564718017" width="100%" height="600px"></iframe>
</figure>
      </div>

        </div>
        <div class="contact__inf col-xs-12 col-sm-6">
          <h2 id="contact" class="section">Liên Hệ Chúng Tôi</h2>

          <div class="contact-box"><i class="fa fa-home"></i>
            <b>Địa chỉ:</b>543 Nguyễn Thị Thập, Q.7, TP.HCM
          </div>
          <div class="contact-box">
            <i class="fa fa-phone"></i> <b>Điện thoại:</b>(028) 38.20.20.21
          </div>
          <div class="contact-box">
            <i class="fa fa-clock-o"></i> <b>Giờ mở cửa:</b>9AM - 10PM.
          </div>
          <div class="social">
            <div class="social__link-and-icon">
              <span class="icon icon-facebook"></span><a class="social__link" href="javascript:void">Facebook<span class="social__link_underline"></span></a>

            </div>
            <div class="social__link-and-icon">
              <span class="icon icon-twitter"></span><a class="social__link" href="javascript:void">Twitter<span class="social__link_underline"></span></a>

            </div>
          </div>
 <div class="map-content">
<figure>
  <div id="googleMap" style="width:90%%;height:600px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7839.874389922107!2d106.70172063232185!3d10.739323992346714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa37e1dad6cd63952!2zUE9YSSBOZ3V54buFbiBUaOG7iyBUaOG6rXA!5e0!3m2!1sen!2s!4v1464583731393" width="100%" height="600px"></iframe>
</figure>
      </div>
        </div>


      <!-- social networks -->

        </div>


    </footer>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
