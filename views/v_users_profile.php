<?php
//add php to the view only in case something has to be shown or not
if(isset($user_name)): ?>
    <h1>This is the profile for <?=$user_name?></h1>
<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>