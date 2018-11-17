<?php
function newCommentField($receipeID){
	if(isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true){
		echo (	
		'<form action="newComment.php?' 
		. $receipeID .
		'" method="post">
			<div class="textbox-wrapper">
				<textarea class="textField commentTextBox" name="comment" placeholder="Type message.."></textarea>
			</div>
			<div class="sendbutton-wrapper">
				 <input class="sendbutton" type="submit" value="Send"/>
			</div>
		</form>');
	}
}
