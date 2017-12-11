<?php require_once "../../check-login.php"; ?>
<?php require_once "../../../db/mysql.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Danh sach nguoi dung</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/menu-con.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/light-bootstrap-dashboard.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php include "../../menu-con.php"; ?>
  <div class="container">
  <h2>Danh sach nguoi dung</h2>
  <div class="row">
    <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "select * from catalogs";
      $result = $conn->query($sql);
      if($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc()) {?>
        <tr>
          <td><?php echo $row["name"];?></td>
          <td><?php echo $row["description"];?></td>
          <td><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
          <td><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
          </tr>
        <?php  }
      }

    ?>
    </tbody>
  </table>
</div>
<script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
