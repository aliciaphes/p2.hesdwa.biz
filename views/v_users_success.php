
<!-- This is a view to show that the user signed up successfully -->

<div class="container-fluid">

	<div class="span4 offset4 oongabox">

		<h3>You have successfully signed up</h3>

		<?php
		$login = new Form();
		$login->open('loginform', "/users/login", NULL, 'POST');
		?>
		<br/>
		<button class="btn" type="submit">Start grunting!</button>
		</form>

	</div>

</div>