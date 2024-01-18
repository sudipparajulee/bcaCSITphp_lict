<?php 
include('header.php'); 
//select query
$qry = "SELECT * FROM news";
include('../includes/dbconnection.php');
$res = mysqli_query($con,$qry);
include('../includes/closeconnection.php');

?>
<h1 class="text-3xl font-bold">News</h1>
<hr class="h-1 bg-red-600">

<div class="text-right my-4">
    <a href="createnews.php" class="bg-green-600 text-white px-2 py-1 rounded">Add News</a>
</div>

<table class="mt-5 w-full text-center">
    <tr>
        <th class="border border-gray-100 bg-gray-300 p-2">Date</th>
        <th class="border border-gray-100 bg-gray-300 p-2">Title</th>
        <th class="border border-gray-100 bg-gray-300 p-2">Action</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($res)){
       ?>
    <tr>
        <td class="border p-2"><?php echo $row['news_date']; ?></td>
        <td class="border p-2"><?php echo $row['title']; ?></td>
        <td class="border p-2">
            <a href="editcategory.php?id=<?php echo $row['id'];?>" class="bg-blue-600 text-white px-2 py-1 rounded">Edit</a>
            <a href="actioncategory.php?deleteid=<?php echo $row['id']; ?>" class="bg-red-600 text-white px-2 py-1 rounded" onclick="return confirm('Are you sure to delete?');">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>

<?php include('footer.php'); ?>