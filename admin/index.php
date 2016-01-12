<?php
			session_start();

			include('config.view.php');
			include('functions.inc.php');
?>

<!DOCTYPE html>  
<html lang="fr"> 
	<head>
		 <!-- TITLE -->
		<title> Admin interface | Admin </title>
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
		<!-- End TYPEKIT -->

		<!-- FAVICON -->
		<!-- End FAVICON -->

		<!-- MOBILE -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- // END MOBILE // -->

        <!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<!-- End CSS -->

	</head>


	<body >

		<?php


			if ($_SESSION['logged_in'] != 'ok') {
				// pas conecté

				if(count($_POST)>0) {

					//Cleaning
					$username = trim(strip_tags($_POST['username']));
					$password = trim(strip_tags($_POST['password']));

					// Validation
					$errors = array();

					if($username == ''){
							$errors['username'] = 'Tu as oublié de remplire ton username !';
					}

					if ($password == '') {
						
						$errors['password'] = 'Tu as oublié de remplire ton password !';
					}

					if (count($errors) <  1 ) {
						
						// No errors, check now if the user is known

						foreach ($users as $u) {
							
							if ($u['username'] == $username && $u['password'] == $password) {
								
								$_SESSION = $u;
								$_SESSION['logged_in'] = 'ok';
							
							}
						} 	

						$errors['loose'] = 'ce login et mot de passe sont inconnus';
						// error, the form's data and the config.inc.php's data are not the same ! 
					}
					
				}

				// display the form
				include ('login.view.php');

			} else {
				//  Connected, we display the database content 
				include ('database.view.php');

			}

		?>		


		<!-- JAVASCRIPT FILES -->	

			<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		  	<script type="text/javascript" src="js/main.js"></script>

		

	  	<!-- End JAVASCRIPT FILES -->

	</body>
</html>	
