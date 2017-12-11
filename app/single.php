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
      <div class="row">
        <?php include "slide-left.php" ?>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6" style="padding: 20px 60px;">
          <div class="row">
            <?php
              if(isset($_GET["id"])){
                $product_id = $_GET["id"];
                $sql = "select * from products where id=$product_id";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                $row = $result->fetch_assoc(); ?>
                <div class="card mt-4" style="margin-bottom: 100px;">
                    <img class="card-img-top img-fluid" src="<?php echo URL_IMAGE.$row['image'];?>" alt="">
                    <div class="card-body">
                      <h3 class="card-title" style="color: red;"> <?php echo $row["name"]; ?></h3>
                      <h4 style="  color: purple; ">Price: <?php echo $row["price"]; ?> VNĐ</h4>
                      <p class="card-text"><?php echo $row["description"];?></p>
                      <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                      4.0 SAO
                  </div>
                </div>
                <!-- /.card -->
            <?php  }
            }
            ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-6-->
        <div class="col-lg-3" style="padding: 20px 10px;">
          <div class="row">
            <?php
              if(isset($_GET["id"])){
                $product_id = $_GET["id"];
                $product_id = rand(1,10);
                $sql = "select * from products where id=$product_id";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                $row = $result->fetch_assoc(); ?>
                <div class="card mt-4" style="margin-bottom: 100px;">
                    <img class="card-img-top img-fluid" src="<?php echo URL_IMAGE.$row['image'];?>" alt="">
                    <div class="card-body">
                      <h3 class="card-title" style="color: red;"> <?php echo $row["name"]; ?></h3>
                      <h4 style="  color: purple; ">Price: <?php echo $row["price"]; ?> VNĐ</h4>
                      <p class="card-text"><?php echo $row["description"];?></p>
                      <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                      4.0 SAO
                  </div>
                </div>
                <!-- /.card -->
            <?php  }
            }
            ?>
          </div>
          <div class="row">
            <?php
              if(isset($_GET["id"])){
                $product_id = $_GET["id"];
                $product_id = rand(13,20);
                $sql = "select * from products where id=$product_id";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                $row = $result->fetch_assoc(); ?>
                <div class="card mt-4" style="margin-bottom: 100px;">
                    <img class="card-img-top img-fluid" src="<?php echo URL_IMAGE.$row['image'];?>" alt="">
                    <div class="card-body">
                      <h3 class="card-title" style="color: red;"> <?php echo $row["name"]; ?></h3>
                      <h4 style="  color: purple; ">Price: <?php echo $row["price"]; ?> VNĐ</h4>
                      <p class="card-text"><?php echo $row["description"];?></p>
                      <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                      4.0 SAO
                  </div>
                </div>
                <!-- /.card -->
            <?php  }
            }
            ?>
          </div>
          <!-- /.row -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
