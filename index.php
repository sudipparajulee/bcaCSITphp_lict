<?php include('includes/header.php') ;
$qry = "SELECT * FROM news ORDER BY news_date desc";
include 'includes/dbconnection.php';
$newsresult = mysqli_query($con,$qry);
include 'includes/closeconnection.php';
?>
<div class="py-10">
    <h2 class="text-3xl font-bold text-center">Latest News</h2>

    <div class="grid grid-cols-4 gap-10 px-24 my-5">
        <?php 
        while($news = mysqli_fetch_assoc($newsresult))
        { ?>
        <div class="bg-gray-300 rounded-lg">
            <img src="admin/uploads/<?php echo $news['photopath'];?>" alt="" class="rounded-t-lg h-60 object-cover">
            <div class="p-2">
                <h1 class="font-bold text-lg"><?php echo $news['title'];?></h1>
                <p class="text-gray-600 text-justify line-clamp-3"><?php echo $news['description'];?></p>
                <div class="text-right text-sm text-red-500">
                <i class="ri-calendar-line"></i> <?php echo $news['news_date']; ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    
</div>

<?php include('includes/footer.php') ?>