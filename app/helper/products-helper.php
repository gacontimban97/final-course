<?php
  function validate($name){
    if(trim($name) == ""){
      $_SESSION["flash"] = "vui long nhap lai ten";
      return false;
    }
    $sql = "select * from products where name='$name'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0)
      return false;
    return true;
  }
?>
