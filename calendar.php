<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="calendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
	session_start();
    include_once "accField.php";
     ?>
    <title>Calendar</title>
</head>
<body>

	<div class="title"><a href="index.php">Tasty Recipes</a></div>
	<div class="navbar">
		<a href="index.php">Home</a>
		<a class= "active" href="calendar.php">Calendar</a>
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
		accField();
	?>

	</div>
	
	<div class="pagetitle">
		<ul>
			<li class="prev">&#10094;</li>
			<li class="next">&#10095;</li>
			<li>
				August<br>
				2018
			</li>
		</ul>
	</div>

	<ul class="weekdays">
		<li>Mo</li>
		<li>Tu</li>
		<li>We</li>
		<li>Th</li>
		<li>Fr</li>
		<li>Sa</li>
		<li>Su</li>
	</ul>


    <div class="week">
        <div class="not-current">
            <div class="content-day">30</div>
        </div>
        <div class="not-current">
            <div class="content-day">31</div>
        </div>
        <div class="day">
            <div class="content-day">1</div>
            <div class="content-image">
                <a href="pancakes.php">
                    <img src="images/pancakes.jpg" alt="Pancakes">
                </a>
            </div>
        </div>
        <div class="day">
            <div class="content-day">2</div>
        </div>
        <div class="day">
            <div class="content-day">3</div>
        </div>
        <div class="day">
            <div class="content-day">4</div>
        </div>
        <div class="day">
            <div class="content-day">5</div>
        </div>
    </div>
    <div class="week">
        <div class="day">
            <div class="content-day">6</div>
            <div class="content-image">
                <a href="meatballs.php">
                    <img src="images/meatballs.jpg" alt="Meatballs">
                </a>
            </div>
        </div>
        <div class="day">
            <div class="content-day">7</div>
        </div>
        <div class="day">
            <div class="content-day">8</div>
        </div>
        <div class="day">
            <div class="content-day">9</div>
        </div>
        <div class="day">
            <div class="content-day">10</div>
            </div>
        <div class="day">
            <div class="content-day">11</div>
            </div>
        <div class="day">
            <div class="content-day">12</div>
            </div>
    </div>
    <div class="week">
        <div class="day">
            <div class="content-day">13</div>
            </div>
        <div class="day">
            <div class="content-day">14</div>
            </div>
        <div class="day">
            <div class="content-day">15</div>
            </div>
        <div class="day">
            <div class="content-day">16</div>
            </div>
        <div class="day">
            <div class="content-day">17</div>
            </div>
        <div class="day">
            <div class="content-day">18</div>
            </div>
        <div class="day">
            <div class="content-day">19</div>
            </div>
    </div>
    <div class="week">
        <div class="day">
            <div class="content-day">20</div>
            </div>
        <div class="day">
            <div class="content-day">21</div>
            </div>
        <div class="day">
            <div class="content-day">22</div>
            </div>
        <div class="day">
            <div class="content-day">23</div>
            </div>
        <div class="day">
            <div class="content-day">24</div>
            </div>
        <div class="day">
            <div class="content-day">25</div>
            </div>
        <div class="day">
            <div class="content-day">26</div>
            </div>
    </div>
    <div class="week">
        <div class="day">
            <div class="content-day">27</div>
        </div>
        <div class="day">
            <div class="content-day">28</div>
            </div>
        <div class="day">
            <div class="content-day">29</div>
            </div>
        <div class="day">
            <div class="content-day">30</div>
            </div>
        <div class="day">
            <div class="content-day">31</div>
            </div>
        <div class="not-current">
            <div class="content-day">1</div>
        </div>
        <div class="not-current">
            <div class="content-day">2</div>
        </div>
    </div>
<footer></footer>
</body>
</html>
