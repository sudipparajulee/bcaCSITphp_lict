<?php
//create database connection
$server = 'localhost';
$username = 'root';
$pass = '';
$database = 'newsapp';

$con = mysqli_connect($server,$username,$pass,$database);

if(!$con)
{
    die('Connection Cannot Establish');
}

?>