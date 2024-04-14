<?php
include "connection.php";

if(isset($_POST['submit'])){
    $mname = $_POST['mname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $expense = $_POST['expense'];
    $pid = $_POST['pid'];

    $sql = "INSERT INTO materials (mname, price, quantity, expense, pid) VALUES ('$mname', '$price', '$quantity', '$expense', '$pid')";

    if(mysqli_query($conn, $sql)){
        header("location: materials.php");
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Material</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        form {
            background-color: #ffffff;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            display: block;
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin: 20px auto 0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Create Material</h1>
    <form method="POST">
        <div>
            <label for="mname">Name:</label>
            <input type="text" name="mname" id="mname">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price">
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" id="quantity">
        </div>
        <div>
            <label for="expense">Expense:</label>
            <input type="text" name="expense" id="expense">
        </div>
        <div>
            <label for="pid">Project ID:</label>
            <input type="text" name="pid" id="pid">
        </div>
        <button type="submit" name="submit">Create</button>
    </form>
    </div>
</body>
</html>
