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
    <div class="container">

      <!-- Introduction Row -->
      <h1 class="my-4">Thông Tin Chúng Tôi
        <br>
        <small>Rất hân hạnh được phục vụ bạn!</small>
      </h1>
      <div class="about-page" style="color: #48439b">
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; POXI ra đời từ năm 2012, với mong muốn làm đa dạng sự lựa chọn cho các bạn nữ, trong việc tìm kiếm những sản phẩm may mặc hợp thời trang. Đến nay, POXI đã và đang không ngừng nỗ lực khẳng định mình trên thị trương thời trang Việt Nam.</p>

<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Những thiết kế của POXI luôn mong muốn hướng tới nét đẹp duyên dáng và tinh tế, không bị lỗi thời. Cùng với đội ngũ kĩ thuật lành nghề, chúng tôi hy vọng mang đến cho các bạn những sản phẩm vừa vặn, chỉn chu, bền đẹp.</p>

<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sản phẩm POXI được tạo ra bởi xưởng may độc quyền, để có thể giữ sản phẩm có được nét riêng, không hòa lẫn với các sản phẩm khác của thị trường.</p>

<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Với tiêu chí không tập trung bề rộng, mà tập trung vào chiều sâu, POXI mong muốn mang đến cho khách hàng các sản phẩm ngày càng chỉn chu và tinh tế hơn, để hy vọng rằng bạn luôn tự tin và duyên dáng trong trang phục của POXI.</p>

<p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trân trọng!</p>
  </div>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Công ty TNHH 1 thành viên</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://localhost:8080/final-course/public/uploads/giamdoc.jpg" alt="">
          <h3>Nguyễn Hữu Khánh
          </h3>
          <p>Giám Đốc POXI</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://localhost:8080/final-course/public/uploads/giamdoc.jpg" alt="">
          <h3>Nguyễn Hữu Khánh
          </h3>
          <p>Thư Kí POXI</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://localhost:8080/final-course/public/uploads/giamdoc.jpg" alt="">
          <h3>Nguyễn Hữu Khánh
          </h3>
          <p>Kế Toán POXI</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://localhost:8080/final-course/public/uploads/giamdoc.jpg" alt="">
          <h3>Nguyễn Hữu Khánh
          </h3>
          <p>Trưởng Phòng POXI</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://localhost:8080/final-course/public/uploads/giamdoc.jpg" alt="">
          <h3>Nguyễn Hữu Khánh
          </h3>
          <p>Nhân Viên POXI</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://localhost:8080/final-course/public/uploads/giamdoc.jpg" alt="">
          <h3>Nguyễn Hữu Khánh
          </h3>
          <p>Thiết Kế POXI</p>
        </div>

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
