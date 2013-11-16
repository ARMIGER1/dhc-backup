<?php
?>

<h2>Contact Don</h2>

<p>Want to say hi to Don? Why not leave him a message on <a class="contentLink" href="http//www.facebook.com/pages/Don+Hughes/196453148400">Facebook</a>
or <a class="contentLink" href="http://www.myspace.com/donhughes">Myspace</a>?</p>

<p>Don't have a Myspace or Facebook account? Perhaps you'd rather email him:</p>

<form method='post' action='contact-send.php'>
	<fieldset>
	<legend>Contact Don</legend>
	<label for='name'>Name (required):</label>
		<input id='form_name' type='text' name='name' value='' />
		<br />
	<label for='email'>Email (required):</label>
		<input id='form_email' type='text' name='email' value='' />
		<br />
	<label for='message'>Message (required):</label>
		<textarea id='form_message' rows='10' cols='40' name='message' value=''></textarea>
	<br />
	<input id='form_submit' type='submit' name='submit' value='Submit' />

	<p class='hide' id='response'></p>

	<div class='hide'>
		<label for='spamCheck'>Do not fill out this field</label>
		<input name='spam_Check' type='text' value='' />
	</div>
	</fieldset>
</form>
