<?php
session_start();
$con = mysqli_connect("localhost","root","","receipts");

if(isset($_POST['save_date']))
{
    $name = $_POST['name'];
    $dob = date('Y-m-d', strtotime($_POST['dateofbirth']));
    $warranty_num = $_POST['warranty_num'];

    $query = "INSERT INTO demo (name,dob,warranty_num) VALUES ('$name','$dob','$warranty_num')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Date values Inserted";
        header("Location: timer.php");
    }
    else
    {
        $_SESSION['status'] = "Date values Inserting Failed";
        header("Location: timer.php");
    }
}
?>