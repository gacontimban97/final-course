<?php session_start(); ?>
<?php
  define("URL_SITE", "http://localhost:8080/final-course/app/");
?>
<?php
	if(!isset($_SESSION["login"])){
		$_SESSION["flash"] = "Khong co quyen truy cap";
		header("location: ".URL_SITE."index.php");
	}
?>
