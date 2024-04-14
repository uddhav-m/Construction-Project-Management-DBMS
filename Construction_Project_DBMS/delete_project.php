<?php
include "connection.php";
if(isset($_POST['pid'])){
  $pid=$_POST['pid'];
  $sql = "DELETE FROM projects WHERE pid=$pid";
  if(mysqli_query($conn, $sql)){
    header("location: projects.php");
    exit();
  }else{
    echo "Error deleting record: " . mysqli_error($conn);
  }
}
?>
