<?php
include 'includes/header.php';
?>

<div class="py-10">
    <form action="" class="w-4/12 bg-gray-200 p-5 mx-auto rounded-lg shadow">
        <h1 class="text-center text-2xl font-bold">Login</h1>
        <input type="text" class="block w-full p-2 rounded my-5" placeholder="Enter Username">
        <input type="password" class="block w-full p-2 rounded my-5" placeholder="Enter Password">

        <div class="text-center">
            <input type="submit" value="Login" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer">
            <p class="text-xs mt-2">Don't have a Login? <a href="register.php" class="text-blue-600">Register Now</a></p>
        </div>
    </form>
</div>

<?php
include 'includes/footer.php';
?>