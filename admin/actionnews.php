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
    $photopath = "uploads/".time().'_'.$filename;

    //move the file to our location
    move_uploaded_file($tmpname,$photopath);

    die('File uploaded');

}

?>