<?php
include_once 'conn.php';

// echo $_POST['mat-code'];

$mat_code = $_POST['mat-code'];
$mat_name = $_POST['mat-name'];
$no_of_colors = $_POST['no-of-colours'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$sql = "UPDATE materials SET mat_name='$mat_name', mat_code='$mat_code', no_of_colors='$no_of_colors', quantity='$quantity', price='$price' WHERE mat_code=".$mat_code;

if ($conn->query($sql) === TRUE){
    echo "Record Updated";
    header('Location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>