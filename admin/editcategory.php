<?php include('header.php'); 
 $categoryid = $_GET['id'];
 $qry = "SELECT * FROM categories WHERE id=$categoryid";

 include('../includes/dbconnection.php');
 $result = mysqli_query($con,$qry);
 include('../includes/closeconnection.php');

 $row = mysqli_fetch_assoc($result);

?>
<h1 class="text-3xl font-bold">Edit Category</h1>
<hr class="h-1 bg-red-600">

<form action="actioncategory.php" method="POST">
    <input type="hidden" name="catid" value="<?php echo $row['id']; ?>">
    <input type="text" class="border p-2 rounded w-full my-2" value="<?php echo $row['categoryname']; ?>" name="categoryname" placeholder="Category Name">
    <input type="text" class="border p-2 rounded w-full my-2" value="<?php echo $row['priority']; ?>" name="priority" placeholder="Priority">
    <div class="flex justify-center my-2">
        <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded" name="update" value="Update Category">
        <a href="category.php" class="bg-red-600 text-white px-2 py-1 rounded ml-2">Cancel</a>
    </div>
</form>

<?php include('footer.php'); ?>