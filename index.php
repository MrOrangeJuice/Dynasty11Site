<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "alexparrotto@dynasty11.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    if(mail($mailTo, $subject, $txt, $headers)){
		header("Location: /?page=contact&thankyou");
	} else {
		header("Location: /?page=contact&error");
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, height=device-height">
	<title>Dynasty 11</title>
	<link rel="stylesheet" href="/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/8f3dcde252.js" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" href="media/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="media/favicon-16x16.png" sizes="16x16" />
</head>

<body>
	<nav id="navigation" class="expand-lg">
		<button class="expand">
			<svg id="opener" width="16px" height="16px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg>
			<svg id="closer" width="16px" height="16px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" class="svg-inline--fa fa-times fa-w-11"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class="" /></svg>
		</button>
		<ul class="nav-items">
			<li><a href="/" class="home<?php if(!isset($_GET['page'])){ echo ' active'; } ?>">Home</a></li>
			<div id="productDiv">
				<li>
					<a href="/?page=player2" class="products<?php if(isset($_GET['page']) && $_GET['page'] == 'products'){ echo ' active'; } ?>"><span>Products</span><svg width="20px" height="20px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" class="" /></svg></a>
					<div id="expand">
						<a href="/?page=player2" class="player2<?php if(isset($_GET['page']) && $_GET['page'] == 'player2'){ echo ' active'; } ?>">Player 2</a>
						<a href="/?page=stargazer" class="stargazer<?php if(isset($_GET['page']) && $_GET['page'] == 'stargazer'){ echo ' active'; } ?>">>Project Stargazer</a>
					</div>
				</li>
			</div>
			<div id="mobileexpand">
				<li><a href="/?page=player2" class="player2<?php if(isset($_GET['page']) && $_GET['page'] == 'player2'){ echo ' active'; } ?>">Player 2</a></li><br>
				<li><a href="/?page=stargazer" class="stargazer<?php if(isset($_GET['page']) && $_GET['page'] == 'stargazer'){ echo ' active'; } ?>">Project Stargazer</a></li>
			</div>
			<li><a href="/?page=about" class="about<?php if(isset($_GET['page']) && $_GET['page'] == 'about'){ echo ' active'; } ?>">About Us</a></li>
			<li><a href="/?page=contact" class="contact<?php if(isset($_GET['page']) && $_GET['page'] == 'contact'){ echo ' active'; } ?>">Contact</a></li>
		</ul>
		<?php /* 
			<audio controls>
				<source src="sounds/coin.mp3" type="audio/mpeg">
			</audio>
		*/ ?>
	</nav>
	<main>
		<?php
		if(!isset($_GET['page'])){
		?>
		<div class="page">
			<div>
				<img src="media/D11noloop_updated.gif" alt="Dynasty 11 Logo" id="logo">
				<div class="socialMedia">
					<a href="https://www.facebook.com/dynasty11studios/"><i class="fab fa-facebook-f" id="facebook"></i></a>
					<a href="https://www.instagram.com/dynasty11studios/"><i class="fab fa-instagram" id="instagram"></i></a>
					<a href="https://twitter.com/Dynasty11Studio"><i class="fab fa-twitter" id="twitter"></i></a>
					<a href="https://www.youtube.com/channel/UCcLl-49iQ79FBgYAeC8-r-w/featured"><i class="fab fa-youtube" id="youtube"></i></a>
				</div>
				<form action="/?page=contact">
					<button class="bigButton">Contact Us</button>
				</form>
			</div>
		</div>
		<?php
		} else {
			$page = $_GET['page'];
			if (file_exists('pages/'.$page.'.php')) {
				include('pages/'.$page.'.php');
			} else {
				echo '<h1>404 Page Not Found</h1>';
			}
		}
		?>
	</main>
	<footer>
		<small><svg aria-hidden="true" width="12px" height="12px" focusable="false" data-prefix="far" data-icon="copyright" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-copyright fa-w-16"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 448c-110.532 0-200-89.451-200-200 0-110.531 89.451-200 200-200 110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200zm107.351-101.064c-9.614 9.712-45.53 41.396-104.065 41.396-82.43 0-140.484-61.425-140.484-141.567 0-79.152 60.275-139.401 139.762-139.401 55.531 0 88.738 26.62 97.593 34.779a11.965 11.965 0 0 1 1.936 15.322l-18.155 28.113c-3.841 5.95-11.966 7.282-17.499 2.921-8.595-6.776-31.814-22.538-61.708-22.538-48.303 0-77.916 35.33-77.916 80.082 0 41.589 26.888 83.692 78.277 83.692 32.657 0 56.843-19.039 65.726-27.225 5.27-4.857 13.596-4.039 17.82 1.738l19.865 27.17a11.947 11.947 0 0 1-1.152 15.518z" class=""></path></svg> 2020 Dynasty 11 Studios, Inc. All rights reserved</small>
		<a href="/" id="footerLink"><img src="media/logo_trans.png" alt="Dynasty 11 Logo" id="footerLogo"></a>
	</footer>
	<script type="text/javascript">
		(function(){
			document.addEventListener('DOMContentLoaded', function(){
				const toggleNav = document.querySelector('#navigation > button.expand');
				if (toggleNav) {
					toggleNav.addEventListener('click', function() {
						const nav = document.getElementById('navigation');
						if(nav){
							if(nav.classList.contains('open')){
								nav.classList.remove('open');
							} else {
								nav.classList.add('open');
							}
						}
					});
				}
			});
		})();
	</script>
</body>

</html>