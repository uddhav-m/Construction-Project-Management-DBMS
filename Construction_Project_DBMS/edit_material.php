<?php
include "connection.php";

if(isset($_POST['submit'])){
    $mid = $_POST['mid'];
    $mname = $_POST['mname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $expense = $_POST['expense'];
    $pid = $_POST['pid'];

    $sql = "UPDATE materials SET mname='$mname', price='$price', quantity='$quantity', expense='$expense', pid='$pid' WHERE mid='$mid'";

    if(mysqli_query($conn, $sql)){
        header("location: materials.php");
    } else{
        echo "Error updating record: " . mysqli_error($conn);
    }
}

$mid = $_GET['id'];
$sql = "SELECT * FROM materials WHERE mid='$mid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Material</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Material</h1>
        <form method="POST">
            <input type="hidden" name="mid" value="<?php echo $row['mid']; ?>">
            <div class="form-group">
                <label for="mname">Name:</label>
                <input type="text" name="mname" id="mname" class="form-control" value="<?php echo $row['mname']; ?>">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" class="form-control" value="<?php echo $row['price']; ?>">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" name="quantity" id="quantity" class="form-control" value="<?php echo $row['quantity']; ?>">
            </div>
            <div class="form-group">
                <label for="expense">Expense:</label>
                <input type="text" name="expense" id="expense" class="form-control" value="<?php echo $row['expense']; ?>">
            </div>
            <div class="form-group">
                <label for="pid">Project ID:</label>
                <input type="text" name="pid" id="pid" class="form-control" value="<?php echo $row['pid']; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
