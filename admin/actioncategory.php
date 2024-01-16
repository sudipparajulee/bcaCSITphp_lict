<?php

if(isset($_POST['store']))
{
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
}


if(isset($_POST['update']))
{
    $categoryname = $_POST['categoryname'];
    $priority = $_POST['priority'];
    $catid = $_POST['catid'];

    $qry = "UPDATE categories SET categoryname = '$categoryname', priority = '$priority' WHERE id=$catid";

    include '../includes/dbconnection.php';
    $res = mysqli_query($con,$qry);
    include '../includes/closeconnection.php';

    if($res)
    {
        echo "<script>alert('Category Updated Successfully');
        window.location.href='category.php';</script>";
    }
    else
    {
        echo "<script>alert('Something Went Wrong');
        window.location.href='category.php';</script>";
    }
}

//delete

if(isset($_GET['deleteid']))
{
    $catid = $_GET['deleteid'];
    $qry = "DELETE FROM categories WHERE id=$catid";
    include '../includes/dbconnection.php';
    $res = mysqli_query($con,$qry);
    include '../includes/closeconnection.php';
    if($res)
    {
        echo "<script>alert('Category Deleted Successfully');
        window.location.href='category.php';</script>";
    }
    else
    {
        echo "<script>alert('Something Went Wrong');
        window.location.href='category.php';</script>";
    }
}

?>