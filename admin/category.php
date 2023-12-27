<?php include('header.php'); ?>
<h1 class="text-3xl font-bold">Categories</h1>
<hr class="h-1 bg-red-600">

<div class="text-right my-4">
    <a href="createcategory.php" class="bg-green-600 text-white px-2 py-1 rounded">Add Category</a>
</div>

<table class="mt-5 w-full text-center">
    <tr>
        <th class="border border-gray-100 bg-gray-300 p-2">Order</th>
        <th class="border border-gray-100 bg-gray-300 p-2">Category Name</th>
        <th class="border border-gray-100 bg-gray-300 p-2">Action</th>
    </tr>
    <tr>
        <td class="border p-2">1</td>
        <td class="border p-2">Sports</td>
        <td class="border p-2">
            <a href="" class="bg-blue-600 text-white px-2 py-1 rounded">Edit</a>
            <a href="" class="bg-red-600 text-white px-2 py-1 rounded">Delete</a>
        </td>
    </tr>
</table>

<?php include('footer.php'); ?>