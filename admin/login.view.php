
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


		<div class="container">
			<div class="intro">
				<h4  class="intro_titre">Interface de gestion d'utilisateur</h4>
				
				<form method="post" action="index.php" id="formAdmin">

					<input type="text" name="honeypot" class="honeypot">

					<label for="username" id="labelUsername"> rentre ici ton username:</label>
						<input type="text" name="username" id="username"  placeholder="username">
						<p class="error smallCatch"> <?php echo message_error($errors, 'username'); ?> </p>

					<label for="password" id="labelPassword"> rentre ici ton password:</label>
						<input type="text" name="password" id="password"  placeholder="**************">
						<p class="error smallCatch"> <?php echo message_error($errors, 'password'); ?> </p>

					<input type="submit" name="submit" id="submit" value="envoyer">
						<p class="error smallCatch"> <?php echo message_error($errors, 'loose'); ?> </p>

				</form>
			</div>
		</div>


		<!-- JAVASCRIPT FILES -->	

			<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		  	<script type="text/javascript" src="js/main.js"></script>

	  	<!-- End JAVASCRIPT FILES -->

	</body>
</html>	
