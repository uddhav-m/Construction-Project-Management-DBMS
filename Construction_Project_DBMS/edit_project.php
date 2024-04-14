<?php
include "connection.php";
if(isset($_POST['update'])){
    $id = $_POST['pid'];
    $name = $_POST['pname'];
    $location = $_POST['plocation'];
    $start_date = $_POST['start_date'];
    $due_date = $_POST['due_date'];
    $expense = $_POST['expense'];

    $sql = "UPDATE projects SET pname='$name', plocation='$location', start_date='$start_date', due_date='$due_date', expense='$expense' WHERE pid=$id";
    $result = $conn->query($sql);
    if(!$result){
        die("invalid query");
    }
    header('location: projects.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM projects WHERE pid=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Project</h1>
            <hr>
            <form action="" method="POST">
                <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
                <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" name="pname" class="form-control" value="<?php echo $row['pname']; ?>">
                </div>
                <div class="form-group">
                    <label>Project Location</label>
                    <input type="text" name="plocation" class="form-control" value="<?php echo $row['plocation']; ?>">
                </div>
                <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" name="start_date" class="form-control" value="<?php echo $row['start_date']; ?>">
                </div>
                <div class="form-group">
                    <label>Due Date</label>
                    <input type="date" name="due_date" class="form-control" value="<?php echo $row['due_date']; ?>">
                </div>
                <div class="form-group">
                    <label>Expense</label>
                    <input type="number" name="expense" class="form-control" value="<?php echo $row['expense']; ?>">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update Project</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
