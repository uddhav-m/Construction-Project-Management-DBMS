<?php
include "connection.php";
if(isset($_POST['mid'])){
  $mid=$_POST['mid'];
  $sql = "DELETE FROM materials WHERE mid=$mid";
  if(mysqli_query($conn, $sql)){
    header("location: materials.php");
    exit();
  }else{
    echo "Error deleting record: " . mysqli_error($conn);
  }
}
?>

