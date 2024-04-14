<?php
include "connection.php";
if(isset($_POST['eid'])){
    $eid = $_POST['eid'];
    $sql = "DELETE FROM employees WHERE eid=$eid";
    if(mysqli_query($conn,$sql)){
        header("location: employees.php");
    }
    else{
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
