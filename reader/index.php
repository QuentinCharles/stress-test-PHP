<?php

	include('functions.inc.php');

?>

<!DOCTYPE html>  
<html lang="fr"> 
	<head>
		 <!-- TITLE -->
		<title> subscription's interface  | reader </title>
		<!-- End TITLE -->

		<!-- METAS -->
		<meta charset="utf-8">
		<meta name="description" content="">
		<!-- End METAS -->

		<!-- Open Graph -->
		<meta property="og:title" content="" />
		<meta property="og:description" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="" />
		<!-- End Open Graph -->

		<!-- TYPEKIT -->
		<script src="https://use.typekit.net/pjk8ibc.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<!-- End TYPEKIT -->

		<!-- FAVICON -->
		<!-- End FAVICON -->

		<!-- MOBILE -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- // END MOBILE // -->

        <!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

	</head>


	<body >

		<?php

			if (count($_POST)>0) {

				// Honeypot Check
					$honeypot = $_POST['honeypot'];
					if ($honeypot != '') {
						die('.');
					}
				
				// Cleaning
					$email = trim(strip_tags($_POST['email']));

				// Validation
					$errors = array();
					$congrate = array();
				

					if (!validation_Email($email)) {
							
						$errors['email'] = 'le format de cet email semble invalide. Réessaye!';

					} else {

						$congrate['email'] = 'Merci ! Nous vous envoyons un email de confirmation ';
					}

				// No errors, we can send the mail now

			}

			include('login.view.php'); 
		?>
	
		


		<!-- JAVASCRIPT FILES -->	

			<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		  	<script type="text/javascript" src="js/main.js"></script>

	  	<!-- End JAVASCRIPT FILES -->

	</body>
</html>	
