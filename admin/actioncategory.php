<?php
include('../includes/dbconnection.php');

//get values from the form
$categoryname = $_POST['categoryname'];
$priority = $_POST['priority'];

//query
$qry = "INSERT INTO categories(categoryname,priority) VALUES('$categoryname',$priority)";

//execute query
$res = mysqli_query($con,$qry);

//close connection
include('../includes/closeconnection.php');
if($res)
{
    echo "<script>alert('Category Added Successfully');
    window.location.href='category.php';</script>";
}
else
{
    echo "<script>alert('Something Went Wrong');
    window.location.href='category.php';</script>";
}

?>