<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/products-helper.php"; ?>
<?php
  if(isset($_POST["name"]) && isset($_POST["image"]) && isset($_POST["description"])
    && isset($_POST["qty"]) && isset($_POST["price"]) && isset($_POST["role"])){
    $name = $_POST["name"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];
    $role = $_POST["role"];

    if(validate($name)){
      $sql = "insert into users(name,image,description,qty,price,role) values('$name','$image','$description','$qty','$price',$role)";
      $result = $conn->query($sql);
      if($result){
        $_SESSION["flash"] = "New record added success";
      }else{
        $_SESSION["flash"] = "Error: ".$sql."<br>".$conn->error;
      }
    }else{
      $_SESSION["flash"] = "information was existed.";
    }
    header("location: new.php");
  }
?>
