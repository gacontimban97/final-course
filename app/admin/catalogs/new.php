<?php require_once "../../check-login.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tao moi user</title>
      <link rel="stylesheet" type="text/css" href="../../../public/css/menu-con.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/light-bootstrap-dashboard.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <?php include "../../menu-con.php" ?>
  <div class="wrapper">
    <form method="post" action="create.php">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Tạo catalog</h1>
      </div>
      <div class="row">
        <label>Tên danh mục</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="row">
        <label>Mô tả</label>
        <textarea class="form-control" name="description"></textarea>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary" style="border-color: #ff3c3c;
    color: #ff6b01;">Đăng ký</button>
      </div>
    </form>
  </div>
  </body>
<script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
</html>
<?php unset($_SESSION["flash"]); ?>
