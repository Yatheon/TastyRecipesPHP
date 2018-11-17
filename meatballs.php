<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="recipe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php
	session_start();
    include_once "frag/accField.php";
	include_once "showComments.php";
	include_once "newCommentField.php";
    ?>
    <title>Meatballs</title>
</head>
<body>
    <div class="title"><a href="index.php">Tasty Recipes</a></div>
    <div class="navbar">
		<a href="index.php">Home</a>
		<a href="calendar.php">Calendar</a>
		<div class="dropdown">
			<p class="dropbtn-active">Weekly Recipes
			<i class="fa fa-caret-down"></i>
			</p>
			<div class="dropdown-content">
				<a href="pancakes.php">Pancakes</a>
				<a class = "active" href="meatballs.php">Meatballs</a>
			</div>
		</div>
		<?php
		userHandler();
	?>
	</div>
	

    <div class="pagetitle">
        <h1>Meatballs </h1>
    </div>
    <div class="foodPresent">
        <img src="images/meatballs-recipe.jpg" alt="Meatballs">
    </div>
    <div class="header-recipe">
        <h2>
            ingredients
        </h2>
    </div>
    <div class="list-wrapper">
        <ul class="ingredients-list">
            <li class="ingredients-list-item">
                <div class="item-nr">
                   1
                </div>
                <div class="text">
                    lb lean (at least 80%) ground beef
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    1/2
                </div>
                <div class="text">
                    cup Progresso Italian-style bread crumbs
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    1/4
                </div>
                <div class="text">
                    cup milk
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    1/2
                </div>
                <div class="text">
                    teaspoon salt
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    1/2
                </div>
                <div class="text">
                    teaspoon Worcestershire sauce
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    1/4
                </div>
                <div class="text">
                    teaspoon pepper
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    1
                </div>
                <div class="text">
                    small onion, finely chopped (1/4 cup)
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    1
                </div>
                <div class="text">
                    egg
                </div>
            </li>
        </ul>
    </div>
    <div class="header-recipe">
        <h2>
                How To
        </h2>
    </div>
    <div class="list-wrapper">
        <ul class="ingredients-list">
            <li class="ingredients-list-item">
                <div class="item-nr">
                    1.
                </div>
                <div class="text">
                    Heat oven to 400F. Line 13x9-inch pan with foil; spray with cooking spray.
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    2.
                </div>
                <div class="text">
                    In large bowl, mix all ingredients. Shape mixture into 24 (1 1/2-inch) meatballs. Place 1 inch apart in pan.
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    3.
                </div>
                <div class="text">
                    Bake uncovered 18 to 22 minutes or until temperature reaches 160F and no longer pink in center.
                </div>
            </li>
        </ul>
    </div>
    <div class="header-recipe">
        <h2>Comments</h2>
    </div>
	
	<?php
		comments(1);
		newCommentField(1);
	?>
	<footer></footer>
</body>
</html>
