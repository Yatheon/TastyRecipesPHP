<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
     include_once "frag/accField.php";
     ?>
    <title>Home</title>
</head>
<body>
    <div class="title"><a href="index.php">Tasty Recipes</a></div>
	<div class="navbar">
		<a class= "active" href="index.php">Home</a>
		<a href="calendar.php">Calendar</a>
		<div class="dropdown">
			<p class="dropbtn">Weekly Recipes
			<i class="fa fa-caret-down"></i>
			</p>
			<div class="dropdown-content">
				<a href="pancakes.php">Pancakes</a>
				<a href="meatballs.php">Meatballs</a>
			</div>
		</div>
			<?php
		userHandler();
	?>
	</div>


    <div class="pagetitle">
        <h1>Welcome! </h1>
    </div>
    <div class="imagecontainer">
        <div class="left-pic">
            <img src="images/sallad-left.jpg" alt="Picture of sallad">
        </div>
        <div class="right-pic">
            <img src="images/steak-right.jpg" alt="Picture of steak">
        </div>
        <div class="textbox">
            <p>Press on the calendar below to find many tasty recipes for every day of the year!</p>
        </div>
        <a href="calendar.php">
            <img class="calendar" src="images/calendar.png" alt="Picture of calendar">
        </a>

    </div>
    <footer></footer>
</body>
</html>
