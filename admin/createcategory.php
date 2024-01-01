<?php include('header.php'); ?>
<h1 class="text-3xl font-bold">Create Category</h1>
<hr class="h-1 bg-red-600">

<form action="actioncategory.php" method="POST">
    <input type="text" class="border p-2 rounded w-full my-2" name="categoryname" placeholder="Category Name">
    <input type="text" class="border p-2 rounded w-full my-2" name="priority" placeholder="Priority">
    <div class="flex justify-center my-2">
        <input type="submit" name="store" class="bg-blue-600 text-white px-2 py-1 rounded" value="Add Category">
        <a href="category.php" class="bg-red-600 text-white px-2 py-1 rounded ml-2">Cancel</a>
    </div>
</form>

<?php include('footer.php'); ?>