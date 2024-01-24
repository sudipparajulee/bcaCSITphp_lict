<?php
if(isset($_POST['store']))
{
    $category_id = $_POST['category_id'];
    $news_date = $_POST['news_date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    

    //for file store
    $filename = $_FILES['photopath']['name'];
    $tmpname = $_FILES['photopath']['tmp_name'];
    $filename = time().'_'.$filename;
    $photopath = "uploads/".$filename;

    //move the file to our location
    move_uploaded_file($tmpname,$photopath);

    $qry = "INSERT INTO news(title,description,news_date,photopath,category_id) VALUES ('$title','$description','$news_date','$filename',$category_id)";

    include('../includes/dbconnection.php');
    $res = mysqli_query($con,$qry);
    include('../includes/closeconnection.php');

    if($res)
    {
        echo "<script>alert('News Created Successfully');
        window.location.href='news.php';</script>";
    }
    else
    {
        echo "<script>alert('Something Went Wrong');
        history.back();</script>";
    }

}

if(isset($_POST['update']))
{
    $newsid = $_POST['newsid'];
    $category_id = $_POST['category_id'];
    $news_date = $_POST['news_date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $filename = $_POST['oldpath'];
    if($_FILES['photopath']['name'] != '')
    {
        //for file store
        $filename = $_FILES['photopath']['name'];
        $tmpname = $_FILES['photopath']['tmp_name'];
        $filename = time().'_'.$filename;
        $photopath = "uploads/".$filename;

        //remove old photo
        unlink("uploads/".$_POST['oldpath']);

        //move the file to our location
        move_uploaded_file($tmpname,$photopath);
    }

    $qry = "UPDATE news SET title='$title',description='$description',news_date='$news_date',photopath='$filename',category_id=$category_id WHERE id=$newsid";

    include('../includes/dbconnection.php');
    $res = mysqli_query($con,$qry);
    include('../includes/closeconnection.php');

    if($res)
    {
        echo "<script>alert('News Updated Successfully');
        window.location.href='news.php';</script>";
    }
    else
    {
        echo "<script>alert('Something Went Wrong');
        history.back();</script>";
    }

}

if(isset($_GET['deleteid']))
{
    $newsid = $_GET['deleteid'];
    $qry = "SELECT * FROM news WHERE id=$newsid";
    include('../includes/dbconnection.php');
    $result = mysqli_query($con,$qry);
    
    $row = mysqli_fetch_assoc($result);
    $filename = $row['photopath'];
    //delete file
    unlink("uploads/".$filename);
    $qry = "DELETE FROM news WHERE id=$newsid";
    
    $res = mysqli_query($con,$qry);
    include('../includes/closeconnection.php');

    if($res)
    {
        echo "<script>alert('News Deleted Successfully');
        window.location.href='news.php';</script>";
    }
    else
    {
        echo "<script>alert('Something Went Wrong');
        history.back();</script>";
    }
}

?>