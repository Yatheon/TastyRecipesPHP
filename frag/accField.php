<?php
function userHandler(){
	  
		$noUser =   
			'<div class="formgroup">
				<form action="login.php" method="post">
					<label for="loginName">Username:</label>
					<input class="textField" type="text" name="USERNAME"/>
					<label for="loginPass">Password:</label>
					<input class="textField" type="password" name="PASSWORD"/>
					<input class="formButton" type="submit" value="Login">
				</form>
			</div>';
		$hasUser = 
			'<div class="formgroup">
				<form action="logout.php" method="post">
					<label for="User">User - ' .  $_SESSION['USERNAME'] .' </label>
					<input class="formButton" type="submit" value="logout">
				</form>
			</div>';
			
			if(isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true){
				echo $hasUser;
			}
			else{
				echo $noUser;
			}
}
