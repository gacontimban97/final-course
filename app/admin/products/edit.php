<?php require_once "../../check-login.php"; ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php
  if(!isset($_GET["id"])){
    $_SESSION["flash"] = "Wrong params";
    header("location: index.php");
  }

  $id = $_GET["id"];
  $sql = "select * from products where id=$id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $catalog_id = $row["catalog_id"];
  $name = $row["name"];
  $description = $row["description"];
  $image = $row["image"];
  $qty = $row["qty"];
  $price = $row["price"];
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
  </head>
  <body>
    <?php include "../../menu-con.php" ?>
  <div class="wrapper">
    <form method="post" action="update.php">
      <input type="hidden" value="<?php echo $id; ?>" name="id">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Chinh Sua Nguoi Dung</h1>
      </div>
      <div class="row">
        <label>Danh mục:</label>
        <select class="form-control" name="catalog_id">
          <?php
            $sql = "select * from catalogs";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){ ?>
                  <option <?php if($catalog_id == $row['id']) echo 'selected=true'; ?> value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
          <?php    }
            }
          ?>
        </select>
      </div>
      <div class="row">
        <label>Tên sản phẩm:</label>
        <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
      </div>
      <div class="row">
        <label>Mô tả:</label>
        <textarea class="form-control" name="description"><?php echo $description; ?></textarea>
      </div>
      <div class="row">
        <label>Ảnh:</label>
        <input class="form-control" type="text" name="image" value="<?php echo $image; ?>">
      </div>
      <div class="row">
        <label>Số lượng:</label>
        <input class="form-control" type="text" name="qty" value="<?php echo $qty; ?>">
      </div>
      <div class="row">
        <label>Giá sản phẩm:</label>
        <input class="form-control" type="text" name="price" value="<?php echo $price; ?>">
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary" style="border-color: #ff3c3c;
    color: #ff6b01;">Sửa thông tin</button>
      </div>
    </form>
  </div>
  <script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
