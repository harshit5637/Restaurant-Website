<?php
include "connection.php";

if(isset($_GET['submit'])){
    $name = $_GET['Name'];
    $time = $_GET['Time'];
    $email = $_GET['Email'];
    $phone = $_GET['Phone'];

    $sql_query = "INSERT INTO `table_reservation2` (`id`, `Name`, `Time`, `Email`, `Phone`) VALUES (NULL, '$name', '$time', '$email', '$phone')";
    $result = mysqli_query($connection, $sql_query);

    if ($result){
        echo "Data Successfully Inserted into the Database";
        echo "<script> location.replace('Reserve_table.php')</script>";
    } else {
        echo $connection->error;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book a table</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>
    /* CSS Reset */
    body {
        width: 100%;
    height: 100vh;
    overflow: Auto;
    position: relative;
    background-image: url("img/bg2.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align:center;
    justify-content: center;
    animation: change 35s infinite ease-in-out;

    }

    .left {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left: 60px;
        top: 20px;
    }

    .left img {
        border-radius: 12px;
        width: 80px;
        
    }

    .left div {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
    }

    .mid {
        display: block;
        width: 45%;
        margin: 4px Auto;
        /* border: 2px solid green; */
    }

    .right {
        position: absolute;
        right: 34px;
        top: 43px;
        display: inline-block;
        /* border: 2px solid yellow; */
    }

    .navbar {
        display: inline-block;
    }

    .navbar li {
        display: inline-block;
        font-size: 18px;
    }

    .navbar li a {
        color: white;
        text-decoration: none;
        padding: 34px 23px;

    }

    .navbar li a:hover,
    .navbar li a.active {
        text-decoration: underline;
        color: grey;

    }

    .btn {
        font-family: 'Baloo Bhai', cursive;
        margin: 0px 9px;
        background-color: black;
        color: white;
        padding: 4px 14px;
        border: 2px solid grey;
        border-radius: 10px;
        font-size: 12px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: rgb(31, 30, 30);
    }

    .container {
        border: 2px solid white;
        margin: 50px 450px;
        padding: 60px;
        width: 28%;
        border-radius: 28px;
    }

    .form-group input {
        font-family: 'Baloo Bhai', cursive;
        text-align: center;
        display: block;
        width: 400px;
        padding: 1px;
        border: 2px solid black;
        margin: 11px auto;
        font-size: 20px;
        border-radius: 5px;
    }
    .form-group label {
        font-family: 'Baloo Bhai', cursive;
        text-align: center;
        display: block;
        width: 400px;
        background-color: cornsilk;
        padding: 1px;
        border: 2px solid black;
        margin: 11px auto;
        font-size: 20px;
        border-radius: 4px;
    }
    .container h1 {
        text-align: center;
        font-size: 25px;
        background-color: cornsilk;
        border-radius: 30px;
    }

    .container button {
        display: block;
        width: 80%;
        margin: 20px auto;
    }

</style>

<body>
    <header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <img src="img/HRM logo 2.PNG">
           
        </div>
        <!-- Mid box for navbar -->
        <div class="mid">
            <ul class="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="About Us.html">About Us</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="Reserve_table.html" class="active">Reserve a Table</a></li>
            </ul>
        </div>

        <!-- Right box for buttons -->
        <div class="right">
            <button class="btn">Call Us Now</button>
            <button class="btn">Email Us</button>
        </div>
    </header>
    <div class="container">
        <h1>Reserve your table here</h1>
        <form action="Reserve_table.php" method="GET">

            <div class="form-group">
                <input type="text" name="Name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <input type="text" name="Time" placeholder="Enter Time">
            </div>
            <div class="form-group">
                <input type="text" name="Email" placeholder="Enter your Email Id">
            </div>
            <div class="form-group">
                <input type="text" name="Phone" placeholder="Enter your Phone Number">
            </div>
            <button class="btn" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>