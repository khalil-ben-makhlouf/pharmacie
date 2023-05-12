<!DOCTYPE html>
<html lang="en">

<head>
	<title>Care Corner - Votre magasin de médicaments en ligne</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

</head>

<body>
	<header>
		<a href="index.php" id="logo1">
			<img src="images\imagesmain\a29af00190484babaaaadcc1907d1aa8.png" alt="logo1" id="headimage">
		</a>
		<div class="input-box">
			<i class="uil uil-search"></i>
			<form method="GET" action="searchform.php" style="	padding-top: 13px;">
				<input type="text" name="query" placeholder="Search here ...">
				<button class="button" type="submit">Search</button>
			</form>
		</div>
				<script>
			const button = document.querySelector(".button");
			button.addEventListener("mousedown", () => button.classList.add("clicked"));
			button.addEventListener("mouseup", () => button.classList.remove("clicked"));	
		</script>
	</header>

	<a id="categorie_jump">
		<nav>
			<ul>
				<li id="Categories">
					<div class="Categoriesbutton">
						<a href="index.php#categorie_jump" id="cat">Categories</a>
					</div>
				</li>
				<li><a href="index.php#products_jump">Products</a></li>
				<li><a href="about_us.html">About us</a></li>
				<li><a href="mailto:khalilbenmakhlouf2@gmail.com">Contact</a></li>
			</ul>

		</nav>
	
		<main>

			<section class="hero">
				<div id="welcome">
					<h2>Welcome to Care Corner</h2>
					<p>We are an online pharmacy that offers you a wide range of quality products at competitive
						prices.
					</p>
				</div>
				<div>
					<img id="symbol" src="images\imagesmain\symbol.jpg" alt="sym">
				</div>
			</section>





			<div id="seccategories" style="background-color: #f2fbfc;">
				<ul>
					<li>
						<a href="search.php?Tag='Personal Care'">
							<div>
								<img src="images\background_images\perso.jpg" alt="">
							</div>
						</a>
						<center>
							<h3>Personal Care</h3>
						</center>
					</li>
					<li>
						<a href="search.php?Tag='Beauty Care'">
							<div>
								<img src="images\background_images\beaty.jpg" alt="">
							</div>
						</a>
						<center>
							<h3>Beauty Care</h3>
						</center>

					</li>
					<li>
						<a href="search.php?Tag='Diabetic Care'">
							<div>
								<img src="images\background_images\diabetic.jpg" alt="Diabetic Care">
							</div>
						</a>
						<center>
							<h3>Diabetic Care</h3>
						</center>
					</li>
					<li>
						<a href="search.php?Tag='Skin Care'">
							<div>
								<img src="images\background_images\ss.jpg" alt="Skin Care">
							</div>
						</a>
						<center>
							<h3>Skin Care</h3>
						</center>
					</li>
				</ul>
			</div>






			<section class="products">
				<a id="products_jump">
					<h2>Our Products</h2>
					<ul>
						<?php
						// Connexion à la base de données
						try {
							$bdd = new PDO('mysql:host=localhost;dbname=care-corner;charset=utf8', 'root', '');
						} catch (Exception $e) {
							die('Erreur : ' . $e->getMessage());
						}

						// Récupération des produits
						$reponse = $bdd->query("SELECT * FROM produits");

						// Affichage des produits
						$counter = 0;
						while ($donnees = $reponse->fetch() and $counter<6) {
							?>
							<li>
								<a href="produit.php?item=<?php echo $donnees['name']; ?>">
									<img src="images/medicaments/<?php echo $donnees['name']; ?>.jpg"
										alt="<?php echo $donnees['name']; ?>" >
									
									<div class="prodetails">
										<center>
											<h3>
												<?php echo $donnees['name']; ?>
											</h3>
											<h3>
												<?php echo $donnees['price']; ?> <span>DT</span>
											</h3>
											<h4 >
												<?php echo $donnees['categorie']; ?> 
											</h4>
										</center>
									</div>
								</a>
							</li>
							<?php
							$counter++;
						}

						$reponse->closeCursor();
						?>
					</ul>
			</section>
			<a href="search.php?Tag=0" style=" text-decoration: none;">
				<h3 class="see" style="background-color:#3f4556;color:#ffffff;margin:80px 35%;padding:5px;border-radius: 8px;text-align:center;font-size:36px;">
					See More ...
				</h3>
			</a>

		</main>

<footer>
		<div id="social" style="display=flex;justify-content: space-evenly;">
			<div>
				<h1 id="kh">Get In Touch</h1>
			</div>
			<div>
			<a href="https://www.facebook.com/khalil.benmakhlouf.35" class="fa fa-facebook"></a>
			<a href="mailto:@khalilbenmakhlouf2@gmail.com" class="fa fa-google"></a>
			<a href="https://www.youtube.com/@khalilbenmakhlouf7661/about" class="fa fa-youtube"></a>
			<a href="https://www.instagram.com/khalil_ben_makhlouf/?hl=fr" class="fa fa-instagram"></a>
			</div>
		</div>
			<p style="padding-top:20px ;">Care Corner &copy; 2023 - All rights reserved</p>
</footer>
</body>

</html>