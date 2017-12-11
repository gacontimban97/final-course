<?php
  define("URL_ADMIN", "http://localhost:8080/final-course/app/admin/");
?>
<div class="wrapper" style="width: 60%;padding-top: 50px;padding-left: 300px;">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">


      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://localhost:8080/final-course/app/index.php" class="simple-text">
                   <h2><i class="fa fa-expeditedssl" style="font-size:45px;color:#ac3636;float: left;"></i>Admin</h2>
                </a>
            </div>
            <ul class="nav">
              <h4><i class="fa fa-black-tie" style="font-size:25px;color:#e1ff39;"></i>USERS</h4>
              <li>
                <a class="nav-item dropdown" href="<?php echo URL_ADMIN; ?>users/index.php">
                    <i class="fa fa-angle-double-right" style="font-size:22px;color:#1deaea;"></i><p>index</p>
                </a>
              </li>
              <li>
                <a class="nav-item dropdown" href="<?php echo URL_ADMIN; ?>users/new.php">
                    <i class="fa fa-angle-double-right" style="font-size:22px;color:#1deaea;"></i><p>new</p>
                </a>
              </li>
            </ul>
            <ul class="nav">
              <h4><i class="fa fa-black-tie" style="font-size:25px;color:#e1ff39;"></i>PRODUCTS</h4>
              <li>
                <a class="nav-item dropdown" href="<?php echo URL_ADMIN; ?>products/index.php">
                    <i class="fa fa-angle-double-right" style="font-size:22px;color:#1deaea;"></i><p>index</p>
                </a>
              </li>
              <li>
                <a class="nav-item dropdown" href="<?php echo URL_ADMIN; ?>products/new.php">
                    <i class="fa fa-angle-double-right" style="font-size:22px;color:#1deaea;"></i><p>new</p>
                </a>
              </li>
            </ul>
            <ul class="nav">
              <h4><i class="fa fa-black-tie" style="font-size:25px;color:#e1ff39;"></i>CATALOGS</h4>
              <li>
                <a class="nav-item dropdown" href="<?php echo URL_ADMIN; ?>catalogs/index.php">
                    <i class="fa fa-angle-double-right" style="font-size:22px;color:#1deaea;"></i><p>index</p>
                </a>
              </li>
              <li>
                <a class="nav-item dropdown" href="<?php echo URL_ADMIN; ?>catalogs/new.php">
                    <i class="fa fa-angle-double-right" style="font-size:22px;color:#1deaea;"></i><p>new</p>
                </a>
              </li>
            </ul>

      </div>
    </div>
