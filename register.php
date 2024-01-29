<?php
include 'includes/header.php';
?>

<div class="py-10">
    <form action="register.php" method="POST" class="w-4/12 bg-gray-200 p-5 mx-auto rounded-lg shadow">
        <h1 class="text-center text-2xl font-bold">Register</h1>
        <input type="text" name="fullname" class="block w-full p-2 rounded my-5" placeholder="Enter Full Name">
        <input type="text" name="username" class="block w-full p-2 rounded my-5" placeholder="Enter Username">
        <input type="password" name="password" class="block w-full p-2 rounded my-5" placeholder="Enter Password">
        <input type="password" name="repassword" class="block w-full p-2 rounded my-5" placeholder="Re Password">

        <div class="text-center">
            <input type="submit" value="Register" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer">
            <p class="text-xs mt-2">Already Registered? <a href="login.php" class="text-blue-600">Login Now</a></p>
        </div>
    </form>
</div>

<?php
include 'includes/footer.php';
?>

<?php
if(isset($_POST['fullname']))
{
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password != $repassword)
    {
        echo '<script>alert("Password and Repassword didnot match"); history.back();</script>';
    }
}
?>