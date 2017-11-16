<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "delete from products where id=$id";
    $result = $conn->query($sql);
    if($result){
        $_SESSION["flash"] = "Xóa thành công";
      }else{
        $_SESSION["flash"] = "Không thể Xóa";
      }
    }
header("location: index.php");
?>
