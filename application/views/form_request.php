<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
		  rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js" type="text/javascript"></script>
</head>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<title>Index</title>
<style>
	.footer-logo {
		width: 50px;
		height: auto;
	}
	.social-icones {
		background-color: white;
		display: flex;
		justify-content: space-around;
		padding : 10px;
	}
	.social-icones a {
		color: black;
		margin : 0 10px;
	}
	body {
		display: flex;
		flex-direction: column;
		min-height: 100vh;
	}
	.footer-container {
		flex-shrink: 0;
	}
	.img-margin {
		margin-left: 20px;
	}
	.traveling-box {
		background-color: white;
		border-radius: 10px;
		padding: 20px;
		margin: 20px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		width: 75%;
	}
	.img-margin {
		width: 50px;
		height: auto;
	}
</style>

<meta name="google" content="notranslate">
</head>
<body class="bg-white font-[Poppins] h-screen" >
<header class="bg-white">
	<div class="flex justify-between items-center w-[92%] mx-auto py-4">
		<div>
			<a href="mailto:ilelajoslin00@gmail.com">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<span style="font-family: Arial,serif">ilelajoslin00@gmail.com</span>
			</a>
			<a href="tel:0821429587">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<span style="font-family: Arial, serif">+243 821429587</span>
			</a>
		</div>
		<div class="social-icones">
			<a href="#" target="_blank"><img src="https://img.icons8.com/nolan/64/github.png" alt="Github" width="32" height="32"></a>
			<a href="#" target="_blank"><img src="https://img.icons8.com/nolan/64/telegram-app.png" alt="Telegram" width="32" height="32"></a>
			<a href="#" target="_blank"><img src="https://img.icons8.com/nolan/64/instagram-new.png" alt="Instagram" width="32" height="32"></a>
		</div>
	</div>
</header>
<header class="bg-white sticky-lg-top top-0">
	<nav class="flex justify-between items-center w-[92%]  mx-auto border-b border-gray-200">
		<div>
			<img class="w-16 cursor-pointer" src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png" alt="...">
		</div>
		<div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
			<ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
				<li>
					<a class="hover:text-gray-500" href="<?php echo site_url('/Calendar/calendar')?>" >Calendrier des congés</a>
				</li>
				<li>
					<a class="hover:text-gray-500" href="<?php echo site_url('/Request/request');?>">Demande validée de congés</a>
				</li>
				<li>
					<a class="hover:text-gray-500" href="<?php echo site_url('/Form_request/form_request')?>">Demande de congés</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<div  class="flex justify-center items-center">
	<div class="flex flex-col justify-center items-center">
		<?php
		if (isset($error_user)) {
			echo '<div class="alert alert-danger" role="alert">';
			echo $error_user;
			echo '</div>';
		}
		?>
		<div class="traveling-box w-full">
			<div>
				<div class="flex justify-between items-center">
					<h1 class="text-2xl font-bold">Enregistrez votre demande</h1>
				</div>
				<div class="mt-8">
					<form action="<?php echo base_url('index.php/Form_request/Submit');?>" class="w-full max-w-lg" method="post">
						<div class="flex flex-wrap -mx-3 mb-6">
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-1">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
									First Name
								</label>
								<input class="appearance none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
									   id="grid-first-name" type="text" placeholder="Jane" name="first_name" required>
							</div>
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-1">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
									Last Name
								</label>
								<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe"
								name="last_name" required>
							</div>
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-1">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
									Service
								</label>
								<input class="appearance none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
									   id="grid-email" type="text" placeholder="Computing" name="service" required>
							</div>
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-1">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
									Type de congés
								</label>
								<select class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-password" name="type_conges"
									>
									<option value="" disabled selected>Select a type of leave</option>
									<option value="conge_maternite">Congé maternité</option>
									<option value="conge_maladie">Congé maladie</option>
									<option value="conge_vacances">Congé vacances</option>
								</select>
							</div>
						</div>
						<div class="flex flex-wrap -mx-3 mb-6">
							<div class="w-full px-3">
								<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
									Commentaire
								</label>
								<textarea class="appearance none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-password" type="password" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="flex flex-wrap -mx-3 mb-6">
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-1">
								<div class="flex items-center max-w-full">
									<div class="relative max-w-sm flex-grow">
										<label for="datepicker" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Date start</label>
										<div class="relative">
											<input type="date" id="datepicker" class="block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 pl-10 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Date de début" name="date_debut">
											<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
												<svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
													<path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
												</svg>
											</div>
										</div>
									</div>
									<span class="mx-auto text-grey-500">to</span>
								</div>
							</div>
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-1">
								<div class="relative max-w-sm flex-grow">
									<label for="datepicker-end" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Date end</label>
									<div class="relative">
										<input type="date" id="datepicker-end" class="block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 pl-10 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Date de fin" name="date_find">
										<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
											<svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
												<path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
											</svg>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="flex justify-center items-center -mx-3 mb-6">
							<div class="w-full px-3">
								<button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Enregistrer</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>
<div>
	<footer class="footer-container flex justify-between items-center w-[92%]  mx-auto border-b border-gray-200">
		<div class="footer-container ">
			<img class="footer-logo" src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png" alt="...">
		</div>
		<div class="footer-content d-flex justify-content-between align-items-end">
			<div>
				<p class="mb-0 text-center text-md-start">&copy 2024 Stripe, Inc.</p>
			</div>
		</div>
	</footer>
</div>
</body>
<script >
	if ('serviceWorker' in navigator) {
		window.addEventListener('load', function() {
			navigator.serviceWorker.register('/sw.js').then(function(registration) {
				console.log('ServiceWorker registration successful with scope: ', registration.scope);
			}, function(err) {
				console.log('ServiceWorker registration failed: ', err);
			});
		});
	}
	$( function() {
		$( "#datepicker").datepicker();
		$( "#datepicker-end" ).datepicker();
	} );
</script>
</html>
