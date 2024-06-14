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
        .img-margin-request {
	margin-left: 20px;
        }
        .img-margin-validate {
	margin-left: 20px;
            margin-right: 20px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .img-margin-validate {
	width : 100%;
	height: 100%;
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
                    <a class="hover:text-gray-500" href="<?php echo site_url('/Calendar/calendar');?>">Calendrier des congés</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="<?php echo site_url('/Request/request');?>">Demande validée de congés</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="<?php echo site_url('/Form_request/form_request'); ?>">Demande de congés</a>
                </li>
            </ul>
        </div>
		<div class="flex items-center gap-6">
			<?php if ($this->session->userdata('username')): ?>
				<a href="<?php echo site_url('Login/login');?>" class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Logout</a>
			<?php else: ?>
				<a href="<?php echo site_url('Login/login');?>" class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Login</a>
			<?php endif; ?>
			<ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
		</div>
    </nav>
</header>
<header class="bg-white text-black flex justify-between items-center w-[92%] mx-auto py-4">
    <div>
        <h1>Home</h1>
    </div>
    <div>
        <p>Accueil</p>
    </div>
</header>
<div class="flex justify-around space-x-10 p-10 ">
    <div class="flex flex-col items-center bg-gray-200 p-5 rounded-lg">
        <div class="flex justify-center items-center bg-blue-500 rounded-full h-12 w-12">
            <i class="fas fa-edit text-black"></i>
        </div>
        <h2>Demande des congés</h2>
        <p class="mt-6">Ce système vise à fournir les tableaux de bord et les outils de mobilité pour les décideurs, tout en offrant une convivialité et une facilité d’utilisation pour les utilisateurs finaux.</p>
    </div>
    <div class="flex flex-col items-center bg-gray-200 p-5 rounded-lg">
        <div class="flex justify-center items-center bg-blue-500 rounded-full h-12 w-12">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
            </svg>
        </div>
        <h2 class="mt-1">Calendrier des congés</h2>
        <p class="mt-6">Permet d’automatiser et de simplifier le processus de demande de congés des absences au sein de l’entreprise. Tout en respectant les fonctionnalités décrites.</p>
    </div>
    <div class="flex flex-col items-center bg-gray-200 p-5 rounded-lg">
        <div class="flex justify-center items-center bg-blue-500 rounded-full h-12 w-12">
            <i class="fas fa-check-square text-black-50"></i>
        </div>
        <h2 class="mt-1">Validation de demande de congés</h2>
        <p class="mt-6">Elle visualise la période demandée, la durée et le type d'absence. Le manager reçoit les demandes des congés et d'absences des membres de son équipe.</p>
    </div>
</div>
<div class="flex justify-center items-center mt-10">
    <div class="border-t border-gray-400 w-25">
        <div class="flex justify-center items-center mt-5">
            <h2 class="text-2xl">Calendrier de congés</h2>
        </div>
    </div>
</div>
<div class="flex justify-center items-center">
	<i>
		<img src="<?php echo base_url('public/dist/leave_request.jpg');?>" alt="icon" class="img-margin w-2/1">
	</i>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="traveling-box flex">
                <div class="flexbox-same-width">
                    <!-- Contenu du nouveau flexbox ici -->
                    <div class="flexbox-same-width">
                        <div class="traveling-box-icon">
                            <i class="fas fa-calendar-alt fa-3x"></i>
                        </div>
                        <div class="traveling-box-content">
                            <h3 style=" font-size: x-large;">Notre mission</h3>
                            <p>
Fournir une vue claire et organisée des absences des employés, afin de faciliter la planification et la gestion
                                des ressources humaines au sein de l'entreprise.
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="flex justify-center items-center mt-10">
    <div class="border-t border-gray-400 w-25">
        <div class="flex justify-center items-center mt-5">
            <h2 class="text-2xl">Demande de congés</h2>
        </div>
    </div>
</div>
<div class="flex justify-center items-center">
	<i>
		<img src="<?php echo base_url('public/dist/request.jpg');?>" alt="icon" class="img-request w-2/1">
	</i>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="traveling-box flex">
                <div class="flexbox-same-width">
                    <!-- Contenu du nouveau flexbox ici -->
                    <div class="flexbox-same-width">
                        <div class="traveling-box-icon">
                            <i class="fas fa-umbrella-beach fa-3x"></i>
                        </div>
                        <div class="traveling-box-content">
                            <h3 style="font-size: large;">Il permet l'utilisation de d' :</h3>
                            <p>- Donner la possibilité aux employés de voir facilement le nombre de jours de congé qui leur restent et de faire leur demande de congés en un seul clic.
                                <br>
                               - Centraliser toutes les demandes de congés au même endroit et avoir les mises à jour automatiquement.
                                <br>
                                - Avoir accès à des rapports complets sur les congés et absences dans l'entreprise.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex justify-center items-center mt-10">
    <div class="border-t border-gray-400 w-25">
        <div class="flex justify-center items-center mt-5">
            <h2 class="text-2xl">Validation de la demande</h2>
        </div>
    </div>
</div>
<div class="flex justify-center items-center">
    <i>
        <img src="<?php echo base_url('public/dist/validate.jpg');?>" alt="icon" class="img-margin-validate w-2/1">
    </i>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="traveling-box flex">
                <div class="flexbox-same-width">
                    <!-- Contenu du nouveau flexbox ici -->
                    <div class="flexbox-same-width">
                        <div class="traveling-box-icon">
                            <i class="fas fa-calendar-check fa-3x"></i>
                        </div>
                        <div class="traveling-box-content">
                            <h3 style="font-size: large;">Quant au responsable :</h3>
                            <p>
L'employeur peut tout à fait refuser une demande de congé,
                                mais il doit alors motiver sa décision.
                                Il peut également accepter la demande de congé,
                                mais en imposant des dates différentes de celles demandées par le salarié.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <footer class="footer-container flex justify-between items-center w-[92%]  mx-auto border-b border-gray-200">
        <div class="footer-container">
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
