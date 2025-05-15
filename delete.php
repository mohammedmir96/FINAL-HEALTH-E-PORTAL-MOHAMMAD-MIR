<?php
include('func.php');
$con = mysqli_connect("localhost", "root", "", "myhmsdb");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_query = "DELETE FROM `expenses` WHERE ID='$id'";
    
    if (mysqli_query($con, $delete_query)) {
        echo "<script>alert('Expense deleted successfully!'); window.location.href='admin-panel.php';</script>";
    } else {
        echo "<script>alert('Error deleting expense: " . mysqli_error($con) . "');</script>";
    }
} else {
    echo "<script>alert('No expense ID provided!'); window.location.href='admin-panel.php';</script>";
}
?>
