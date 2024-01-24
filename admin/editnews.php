<?php include('header.php');
//for getting current news
$newsid = $_GET['id'];
$qry = "SELECT * FROM news WHERE id=$newsid";
include('../includes/dbconnection.php');
$newsresult = mysqli_query($con,$qry);
include('../includes/closeconnection.php');
$news = mysqli_fetch_assoc($newsresult);

//for getting categories
$qry = "SELECT * FROM categories ORDER BY priority";
include('../includes/dbconnection.php');
$res = mysqli_query($con,$qry);
include('../includes/closeconnection.php');
?>
<h1 class="text-3xl font-bold">Edit News</h1>
<hr class="h-1 bg-red-600">

<form action="actionnews.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="newsid" value="<?php echo $news['id']; ?>">
    <select name="category_id" class="border p-2 rounded w-full my-2">
        <?php while($row = mysqli_fetch_assoc($res)){ ?>
        <option value="<?php echo $row['id']; ?>" 
        <?php if($row['id'] == $news['category_id']){
            echo "selected";
        } 
        ?>
        >
            <?php echo $row['categoryname']; ?>
        </option>
        <?php } ?>
    </select>
    <input type="date" class="border p-2 rounded w-full my-2" name="news_date" value="<?php echo $news['news_date']; ?>">
    <input type="text" class="border p-2 rounded w-full my-2" name="title" placeholder="News Title" value="<?php echo $news['title']; ?>">
    <input type="text" class="border p-2 rounded w-full my-2" name="description" placeholder="Enter Description" value="<?php echo $news['description']; ?>">
    <input type="file" name="photopath" class="border p-2 rounded w-full my-2" >
    <input type="hidden" name="oldpath" value="<?php echo $news['photopath']; ?>">
    <div class="flex justify-center my-2">
        <input type="submit" name="update" class="bg-blue-600 text-white px-2 py-1 rounded" value="Update News">
        <a href="news.php" class="bg-red-600 text-white px-2 py-1 rounded ml-2">Cancel</a>
    </div>
</form>

<?php include('footer.php'); ?>