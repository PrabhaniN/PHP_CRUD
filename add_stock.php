<?php
include_once 'conn.php';

$mat_name = $_POST['mat-name'];
$mat_code = $_POST['mat-code'];
$no_of_colors = $_POST['no-of-colours'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$sql = "INSERT INTO materials(mat_code, mat_name, no_of_colors, quantity, price) VALUES ('$mat_code', '$mat_name', '$no_of_colors', '$quantity', '$price')";

if ($conn->query($sql) === TRUE){ // check whether the sql query is true
    // echo "New record added";
    header('Location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!-- created connection with database to add data -->