<?php
include "includes/header.php";
?>

    <body style="background-image:url()">

    <div class="row" style="margin-top:50px">
		<div class="col l6 offset-l3 m8 offset-m2 s12">
			<div class="card-panel center grey lighten-2" style="margin-bottom:0px">
			<ul class="tabs grey lighten-2">
				<li class="tab">
					<a href="#login">login</a>
				</li>
				<li class="tab">
					<a href="#signup">signup</a>
				</li>
			</ul>
			
			</div>
		</div>
		<div class="col l6 offset-l3 m8 offset-m2 s12" id="login">
			<div class="card-panel center red lighten-3"  style="margin-top:1px">
				<h5>Login To Continue</h5>
				<?php
					if(isset($_SESSION['message']))
					{
						echo $_SESSION['message'];
						unset($_SESSION['message']);
					}
				?>
				<form action="login_check.php" method="POST">
				<div class="input field">
							<input type="text" id="username" name="username" placeholder="username">
						</div>
						<div class="input field">
							<input type="password" name="password" placeholder="password">
						</div>
						<input type="submit" name="login" value="Login" class="btn">
				</form>
			</div>

		</div>

		<div class="col l6 offset-l3 m8 offset-m2 s12" id="signup">
				<div class="card-panel center lime lighten-4"  style="margin-top:1px">
					<h5>Sign Up Now</h5>
					<form action="signup.php" method="POST">
					<div class="input-field">
						<input type="email" name="email" id="email" placeholder="Enter Email" class="validate">
						<label for="email" data-error="Invalid Email Format" data-success=""></label>
						<div class="input field">
							<input type="text" id="username" name="username" placeholder="username">
						</div>
						<div class="input field">
							<input type="password" name="password" placeholder="password">
						</div>
						<input type="submit" name="signup" class="btn" value="Sign Up">
					</form>
					</div>
				</div>
	
			
		</div>


	</div>



	<?php
include "includes/footer.php";
?>
    
