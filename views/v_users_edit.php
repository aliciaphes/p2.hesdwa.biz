
<?php if(isset($user->first_name)){ ?>

<div class="container-fluid login">

	<div class="row-fluid">

		<div class="span3 offset3" style="background-color:#004026; padding: 15px;"><!-- #601F08/#004026 -->

			<?php
			$profile = new Form();

			$profile->open('form', "/users/p_edit", NULL, 'POST');
			?>
			<h4><?php echo "Edit your profile"; ?></h4></br>
			<label>First name</label>
			<?php $info = $user->first_name; ?>
			<!-- $profile->textarea("name"); -->
			<input type="text" name="first_name" value="<?php echo $info; ?>" placeholder="First name">


			<label>Last name</label>
			<?php $info = $user->last_name; ?>
			<input type="text" name="last_name" value="<?php echo $info; ?>" placeholder="Last name">


			<label>Email</label>
			<?php $info = $user->email; ?>
			<input type="text" name="email" value="<?php echo $info; ?>" placeholder="Email">

<!-- 			<label>Password</label>
	<input type="password" name="password" placeholder="Password"> -->

	<!-- Time zone ? -->


</br>
<button class="btn" type="submit">Update</button></form>
</div>
</div>
</div>
<?php }else die("You're not allowed here!"); ?>