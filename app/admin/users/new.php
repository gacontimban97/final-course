<?php require_once "../../check-login.php"; ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
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
  <div class="wrapper" style="color: #6d3eff;>
    <form method="post" action="create.php" >
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h2 style="padding-bottom: 50px;">TẠO MỚI NGƯỜI DÙNG</h2>
      </div>
      <div class="row" ">
        <label>Tên người dùng:</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="row">
        <label>Email:</label>
        <input class="form-control"  type="email" name="email">
      </div>
      <div class="row">
        <label>Mật khẩu:</label>
        <input class="form-control"  type="password" name="password">
      </div>
      <div class="row">
        <label>Lặp lại mật khẩu:</label>
        <input class="form-control"  type="password" name="repassword">
      </div>
      <div class="row">
        <label>Quyền:</label>
        <select class="form-control" name="role" style="color: #6d3eff;">
          <option value="2">User</option>
          <option value="1">Editor</option>
          <option value="0">Admin</option>
        </select>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary" style="border-color: #ff3c3c;
    color: #ff6b01;">Đăng Ký</button>
      </div>
    </form>
  </div>
  </body>
<script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
</html>
<?php unset($_SESSION["flash"]); ?>
