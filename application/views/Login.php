<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
	<style>
		.center-image {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 50px;
			height: 50px;
			margin: 0 auto;

		}
		.login-background
		{
			width : 70%;
			margin: 10px   auto 0;
		}
	</style>
	<meta name="google" content="notranslate">
</head>
<body>
<div class="container mt-5" >
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div>
				<div class="card-body text-center">
					<img  src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png" class="center-image" alt="...">
					<h2 class="text-center mb-4">Sign in</h2>
					<?php
						if (isset($error)) {
							echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
						}
					?>
					<form action="<?php echo base_url('index.php/Login/login');?>" method="post" class="login-background" style="margin-top:29px ;">
						<div data-mdb-input-ini class="mb-3 ml-5 mr-5 form-outline">
							<input type="text" name="username" class="form-control" placeholder="Username" required="required">
						</div>
						<div data-mdb-input-ini class="mb-3 ml-5 mr-5 form-outline">
							<input type="password"
								   title="This field accept only 4 numbers combined 0-9"
								   pattern="^(?=.*[0-9])(?=.*\d)[0-9\d]{4,}$" name="password" class="form-control" placeholder="Password" required="required">
							<span class="loading"></span>
						</div>
						<div class="mb-3 pl-5 pr-5">
							<button type="submit" value="Login" class="btn btn-primary w-100">Login</button>
						</div>
						<div>
							<p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Create first an account. On <a href="<?php echo site_url('Creating/creating');?>" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Strive</a>.</p>
						</div>
						<p class="text-center mt-5 mb-3 text-muted">&copy; 2024 - 2025 </p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	// Initialization for ES Users
	import { Input, initMDB } from "mdb-ui-kit";
	initMDB({ Input });
</script>
<script>
	window.onload = function {
		console.log("window loaded");
		setTimeout(function () {
			var errorDiv = document.getElementById('error');
			console.log("timeout function called, errorDiv is :", errorDiv);
			if (errorDiv) {
				errorDiv.style.display = 'block';
			}
		}, 5000);
	}
</script>
</body>
</html>
