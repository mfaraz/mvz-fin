<div >
	<div class="container" style="width:300px;">
	
	<?php echo $message; ?>

	<form class="form-signin" role="form" action="login" method="post">
		<!--<h2 class="form-signin-heading">Please sign in</h2>-->
		<div style="margin:0 auto; width:130px;"><img src="./source/img/Invoice-icon.png" /></div>
		<br />
		<div style="padding:0 0 5px 0;"><input name="username" type="text" class="form-control" placeholder="Username" required autofocus></div>
		<div><input name="password" type="password" class="form-control" placeholder="Password" required></div>
		<!--<label class="checkbox">
		<input type="checkbox" value="remember-me"> Remember me
		</label>-->
		<br />
		<button class="btn btn-md btn-primary btn-block" style="margin:0 auto; width:130px;" type="submit">Sign in</button>
	</form>

	</div> <!-- /container -->
</div>
