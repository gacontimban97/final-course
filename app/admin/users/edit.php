<?php require_once "../../check-login.php"; ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php
  if(!isset($_GET["id"])){
    $_SESSION["flash"] = "Wrong params";
    header("location: index.php");
  }

  $id = $_GET["id"];
  $sql = "select * from users where id='$id'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $name = $row["name"];
  $email = $row["email"];
  $role = $row["role"];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tao moi user</title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/menu-con.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/light-bootstrap-dashboard.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <body>
     <?php include "../../menu-con.php" ?>
  <div class="wrapper" style="color: #6d3eff;">
    <form method="post" action="update.php">
      <input type="hidden" value="<?php echo $id; ?>" name="id">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Tạo mới người dùng</h1>
      </div>
      <div class="row">
        <label>Tên người dùng:</label>
        <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
      </div>
      <div class="row">
        <label>Email:</label>
        <input class="form-control"  type="email" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="row">
        <label>Mật khẩu:</label>
        <input class="form-control"  type="password" name="password">
      </div>
      <div class="row">
        <label>Lặp lại mật khẩu:</label>
        <input class="form-control"  type="password" name="repassword">
      </div>
      <div class="row" style="color: #6d3eff;">
        <label>Quyền:</label>
        <select class="form-control" name="role">
          <option <?php if($role ==  2) echo "selected='true'"; ?> value="2">User</option>
          <option <?php if($role ==  1) echo "selected='true'"; ?> value="1">Editor</option>
          <option <?php if($role ==  0) echo "selected='true'"; ?> value="0">Admin</option>
        </select>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary" style="border-color: #ff3c3c;
    color: #ff6b01;">SỬA THÔNG TIN</button>
      </div>
    </form>
  </div>
<script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
