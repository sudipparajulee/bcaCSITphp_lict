<?php include('header.php');
$qry = "SELECT * FROM categories ORDER BY priority";
include('../includes/dbconnection.php');
$res = mysqli_query($con,$qry);
include('../includes/closeconnection.php');
?>
<h1 class="text-3xl font-bold">Create News</h1>
<hr class="h-1 bg-red-600">

<form action="actionnews.php" method="POST">
    <select name="category_id" class="border p-2 rounded w-full my-2">
        <?php while($row = mysqli_fetch_assoc($res)){ ?>
        <option value=""><?php echo $row['categoryname']; ?></option>
        <?php } ?>
    </select>
    <input type="date" class="border p-2 rounded w-full my-2" name="news_date">
    <input type="text" class="border p-2 rounded w-full my-2" name="title" placeholder="News Title">
    <input type="text" class="border p-2 rounded w-full my-2" name="description" placeholder="Enter Description">
    <input type="file" name="photopath" class="border p-2 rounded w-full my-2">
    <div class="flex justify-center my-2">
        <input type="submit" name="store" class="bg-blue-600 text-white px-2 py-1 rounded" value="Add News">
        <a href="news.php" class="bg-red-600 text-white px-2 py-1 rounded ml-2">Cancel</a>
    </div>
</form>

<?php include('footer.php'); ?>