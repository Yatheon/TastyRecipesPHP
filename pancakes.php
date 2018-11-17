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
    <title>Pancakes</title>
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
				<a class = "active" href="pancakes.php">Pancakes</a>
				<a href="meatballs.php">Meatballs</a>
			</div>
		</div>
			<?php
		userHandler();
	?>
	</div>


    <div class="pagetitle">
        <h1>Pancakes </h1>
    </div>
    <div class="foodPresent">
        <img src="images/pancakes-recipe.jpg" alt="Pancakes">
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
                    3/2
                </div>
                <div class="text">
                    cups all-purpose flour
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    2
                </div>
                <div class="text">
                    tablespoons sugar
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    2
                </div>
                <div class="text">
                    teaspoons baking powder
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    1
                </div>
                <div class="text">
                    teaspoon baking soda
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
                    1
                </div>
                <div class="text">
                    cup milk or buttermilk
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    2
                </div>
                <div class="text">
                    large eggs
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    1/4
                </div>
                <div class="text">
                    cup melted butter
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
                    In a large mixing bowl, sift together flour, sugar baking powder, baking soda, and salt.
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    2.
                </div>
                <div class="text">
                    Whisk in milk, eggs, and melted butter just until combined.
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    3.
                </div>
                <div class="text">
                    Preheat a flat griddle over medium-high heat.
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    4.
                </div>
                <div class="text">
                    Scoop 1/4 cup of pancake batter onto griddle. Let pancakes cook until bubbles form before flipping.
                </div>
            </li>
            <li class="ingredients-list-item">
                <div class="item-nr">
                    5.
                </div>
                <div class="text">
                    Cook other side until golden brown. Serve hot with syrup and fruit.
                </div>
            </li>
        </ul>
    </div>
    <div class="header-recipe">
        <h2>Comments</h2>
    </div>

	<?php
		comments(0);
		newCommentField(0);
	?>
    <footer></footer>
</body>
</html>
