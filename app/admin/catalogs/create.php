<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if(isset($_GET["name"]) && isset($_GET["description"])
    && isset($_GET["password"]) && isset($_GET["role"])){
    $name = $_GET["name"];
    $description = $_GET["description"];

    if(validate($email,$password)){
      $sql = "insert into catalogs(name,description) values('$name','$description')";
      $result = $conn->query($sql);
      if($result){
        $_SESSION["flash"] = "New record added success";
      }else{
        $_SESSION["flash"] = "Error: ".$sql."<br>".$conn->error;
      }
    }else{
      $_SESSION["flash"] = "Email was existed.";
    }
    header("location: new.php");
  }
?>
