<?php
  function validate($name,$description){
    if(trim($name) == "" || trim($description) == ""){
      $_SESSION["flash"] = "Email or Password can not
        empty";
      return false;
    }
    $sql = "select * from catalogs where name='$name'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0)
      return false;
    return true;
  }
?>
