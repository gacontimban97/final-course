<div class="col-lg-3">
  <h1 class="my-4" ><a href="index.php"><img src="../public/uploads/store_logo.png" style="padding-left: 76px;" ></a></h1>
  <img src="../public/uploads/poxilogo.png" style="
    width: 250px; height: 250px;">
  <div class="list-group">
    <h2 style="color: #2abad1">Truy cập nhiều</h2>
    <?php
      $sql = "select * from catalogs";
      $result = $conn->query($sql);
      if($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc()) {?>
        <a href="catalogs.php?id=<?php echo $row["id"];?>"
          class="list-group-item" style="border-radius: 5px;
    margin: 10px 0px;color: #a94442;" ><span class="glyphicon glyphicon-triangle-right" style="color: red;"></span><?php echo $row["name"];?></a>
        <?php  }
      }
      ?>
  </div>
</div>
