<?php defined('SYSPATH' or die('No direct script access.'))?>

<?php if ($message) : ?>
	<h3 class="message">
		<?= $message; ?>
	</h3>
<?php endif; ?>

<?php echo Form::open('Login/login', array('id' => 'login')); ?>
<h1>Log In</h1>
<fieldset id='inputs'>
	<?php 
		// echo Form::label('username', 'Username: ')
		echo Form::input('username',null,
			array('id' => 'username', 
				"placeholder" => "Username", 
				"autofocus", "required"));
		echo Form::password('password',null, 
			array('id' => 'password',
			 'placeholder' => 'Password',
			  "required"));
	?>
</fieldset>
<fieldset id='actions'>
	<?php 
		echo Form::submit('login','Login',array('id'=>'submit'));
		echo HTML::anchor('Login/create', 'New Account');
	?>

</fieldset>
	
<?php echo Form::close(); ?>

<!-- <form id="login">
    <h1>Log In</h1>
    <fieldset id="inputs">
        <input id="username" type="text" placeholder="Username" autofocus required>   
        <input id="password" type="password" placeholder="Password" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Log in">
        <a href="">Forgot your password?</a><a href="">Register</a>
    </fieldset>
</form> -->
