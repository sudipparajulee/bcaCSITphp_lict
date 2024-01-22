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

?>