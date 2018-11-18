<?php
function accField($thisPage)
{
    if (isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true) {
        echo '<div class="formgroup">
				<form action="logout.php" method="post">
				    <input type="hidden" name="redirect" value="' . $thisPage . '"/>
					<label for="User">User - ' . $_SESSION['USERNAME'] . ' </label>
					<input class="formButton" type="submit" value="logout">
				</form>
			</div>';
    } else {
        echo '<div class="formgroup">
				<form action="login.php" method="post">
				    <input type="hidden" name="redirect" value="' . $thisPage . '"/>
					<label for="loginName">Username:</label>
					<input class="textField" type="text" name="USERNAME"/>
					<label for="loginPass">Password:</label>
					<input class="textField" type="password" name="PASSWORD"/>
					<input class="formButton" type="submit" value="Login">
				</form>
			</div>';
        if (!isset($_SESSION['loggedin']) and $_SESSION['failedLogin'] == true) {
            echo("<p class='accFieldError'>Wrong username or password!</p>");
            $_SESSION['failedLogin'] = false;
        }
    }
}