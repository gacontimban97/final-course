<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" style="border-radius: 0px;">
      <div class="container">
        <a class="navbar-brand" href="http://localhost:8080/final-course/app/index.php">Shop Nữ Cao Cấp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" style="float: right;">
            <li class="nav-item active" style="padding: 0px 4px;">
              <a class="nav-link" href="http://localhost:8080/final-course/app/index.php">Trang Chủ
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active"  style="padding: 0px 4px;">
              <a class="nav-link" href="http://localhost:8080/final-course/app/about.php">Thông Tin
              </a>
            </li>
            <li class="nav-item active" style="padding: 0px 4px;">
              <a class="nav-link" href="http://localhost:8080/final-course/app/about.php">Blog
              </a>
            </li>
            <li class="nav-item active" style="padding: 0px 4px;">
              <a class="nav-link" href="http://localhost:8080/final-course/app/contact.php">Liên Hệ</a>
            </li>
            <?php if(isset($_SESSION["login"])){ ?>
            <li class="nav-item active dropdown" style="padding: 0px 4px;">
              <a class="nav-link active dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cài Đặt Khác</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="admin/users/">Admin panel</a>
                <a class="dropdown-item" href="logout.php">Đăng Xuất</a>
              </div>
            </li>
            <?php }else{ ?>
              <li class="nav-item active" style="padding: 0px 4px;">
                <a class="nav-link" href="login.php">Đăng Nhập</a>
              </li>
            <?php } ?>
          </ul>

        </div>
      </div>
    </nav>
