
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
				<h1  class="intro_titre">Soit le premier au courant</h1>
				<h4  class="intro_sousTitre">(inscrit toi pour recevoir un email le jour de lancement du produit)</h4>
				
				<form method="post" action="index.php" id="formReader">
					<input type="text" name="honeypot" class="honeypot">
					<label for="email" id="labelEmail"> rentre ici ton email:</label>
					<div class="containerEmail">
						<input type="text" name="email" id="email"  placeholder="Ton adresse Email">
						<p class="error"> <?php echo message_error($errors, 'email'); ?> </p>
						<p class="congrate"> <?php echo message_congrate($congrate, 'email'); ?> </p>
					</div>
					<input type="submit" name="submit" id="submit" value="envoyer">
				</form>
			</div>
		</div>


		<!-- JAVASCRIPT FILES -->	

			<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		  	<script type="text/javascript" src="js/main.js"></script>

	  	<!-- End JAVASCRIPT FILES -->

	</body>
</html>	
