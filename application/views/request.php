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
					<a  class="hover:text-gray-500" href="<?php echo site_url('/Calendar/calendar');?>" >Calendrier des congés</a>
				</li>
				<li>
					<a id="validate" class="hover:text-gray-500" href="<?php echo site_url('/Request/request'); ?>">Demande validée de congés</a>
				</li>
				<li>
					<a class="hover:text-gray-500" href="<?php echo site_url('/Form_request/form_request')?>">Demande de congés</a>
				</li>
			</ul>
		</div>
		<div class="flex items-center gap-6">

		</div>
	</nav>
</header>
<div class="bg-white text-black flex justify-between items-center w-[92%] mx-auto py-4">
	<div class="traveling-box w-full">
		<div class="flex justify-between items-center w-25">
			<h1 class="text-2xl font-bold flex-grow">Les demandes de congés</h1>
			<form action="<?php echo site_url('Request/leave_type_input');?>" method="post" >
				<input type="text" class="border border-gray-200 p-2 rounded-lg mr-5" name="leave_type_input" placeholder="Departement ici...">
				<button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Rechercher</button>
			</form>
		</div>
	</div>
</div>
<div  class="flex justify-center items-center">
	<div class="flex flex-col justify-center items-center">

		<div class="traveling-box mb-35 w-full">
			<div class="flex justify-between items-center">
				<h1 class="text-2xl font-bold">Liste de conges</h1>
			</div>
			<div>
				<?php if(!empty($leave_request)) :?>
				<table class="table-auto w-full">
					<thead>
					<tr>
						<th class="px-4 py-2">Nom</th>
						<th class="px-4 py-2">Prenom</th>
						<th class="px-4 py-2">Date de debut</th>
						<th class="px-4 py-2">Date de fin</th>
						<th class="px-4 py-2">Type de congé</th>
						<th class="px-4 py-2">Statut</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($leave_request as $request) :?>
					<tr>
						<td class="border px-4 py-2"><?php echo $request->first_name; ?></td>
						<td class="border px-4 py-2"><?php echo $request->last_name; ?></td>
						<td class="border px-4 py-2"><?php echo $request->date_debut; ?></td>
						<td class="border px-4 py-2"><?php echo $request->date_find; ?></td>
						<td class="border px-4 py-2"><?php echo $request->leave_type; ?></td>
						<td class="border px-4 py-2"><?php echo  $request->leave_type; ?></td>
					</tbody>
					<?php endforeach; ?>
				</table>
				<?php else :
					echo '<div class="alert alert-danger" role="alert">';
					echo 'Aucune demande de congé n\'a été trouvée -:)';
					echo '</div>';
				endif;?>

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
</script>
</html>
