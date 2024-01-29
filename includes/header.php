<?php 
include 'includes/dbconnection.php';
$qry = "SELECT * FROM categories ORDER BY priority";
$resultcat = mysqli_query($con,$qry);
include 'includes/closeconnection.php';
?>
<html>

<head>
    <title>My PHP Project</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="tailwind.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <!-- <link rel="stylesheet" href="tailwind.css"> -->
    <!-- <style>
        .line-clamp-3{
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;  
            overflow: hidden;
        }
    </style> -->
</head>

<body>
    <nav class="flex justify-between items-center shadow px-14">
        <img src="https://www.bitmapitsolution.com/images/logo/logo.png" class="h-20" alt="">
        <div>
            <a class="mx-2" href="index.php">Home</a>
            <?php while($cat = mysqli_fetch_assoc($resultcat))
            {
                ?>
            <a class="mx-2" href="categorynews.php?catid=<?php echo $cat['id'] ?>"><?php echo $cat['categoryname'] ?></a>
                <?php } ?>
            <a class="mx-2" href="login.php">Login</a>
        </div>
    </nav>