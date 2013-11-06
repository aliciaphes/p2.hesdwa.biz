<!-- This is the view where the user can change his profile -->


<?php if(isset($user->token)){ ?>

	<div class="container-fluid">

		<div class="row-fluid">

			<div class="span3 offset3 oongabox">

				<?php

				$profile = new Form();
				$profile->open('form', "/users/p_edit", NULL, 'POST');
				?>

				<h3><?php echo "Edit your profile"; ?></h3></br>
				<label>First name</label>
				<?php $info = $user->first_name; ?>
				<input type="text" name="first_name" value="<?php echo $info; ?>" placeholder="First name">


				<label>Last name</label>
				<?php $info = $user->last_name; ?>
				<input type="text" name="last_name" value="<?php echo $info; ?>" placeholder="Last name">
				</br>
				<button class="btn" type="submit">Update</button>
				</form>
				
			</div>
		</div>
	</div>
<?php } ?>