
 <!-- This is the view where the user can create posts -->

<div class="container-fluid justified">

	<div class="row-fluid">
		<div class="span3 offset3">

			<?php if(isset($added)){ ?>

				<!-- Display information message if oonga has been created: -->
				<div class='alert alert-success'>	
					<strong>Oonga has been added</strong>
				</div>

			<?php } ?>
		</div>	
	</div>

	<div class="row-fluid">
		<div class="span3 offset3 oongabox">
			
			<form method="POST" action="/posts/p_add">
				<h3>New oonga:</h3>

				<textarea placeholder='Post your oonga here' name='content' id='content' maxlength='255' cols='70' rows='10'></textarea>

				<br><br>
				<button class="btn" type="submit">Grunt!</button>
			</form>

		</div>

	</div>

</div>