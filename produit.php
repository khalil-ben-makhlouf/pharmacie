<!DOCTYPE html>
<html lang="en">

<head>
	<title>Care Corner - Votre magasin de médicaments en ligne</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css\produit.css">
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


		<?php
		// Connexion à la base de données
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=care-corner;charset=utf8', 'root', '');
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		// Récupération des produits
		$query = $_GET['item'];
		if ($query != '') {
			$reponse = $bdd->query("SELECT * FROM produits WHERE name LIKE '%$query%'");
		}

		$item = $reponse->fetch();
		?>


		<style>
			/* Add any desired styling here */
			.product-container {
				display: flex;
				align-items: center;
				justify-content: space-between;
				margin-bottom: 90px;
			}

			.product-container img {
				width: 400px;
				height: auto;
				margin-right: 20px;
			}

			.product-details {
				position: relative;
				flex-direction: column;
				left=200px;
				margin-right: 90px;
				margin-left: 90px;
			}

			.product-details h2 {
				font-size: 24px;
				color: #7b1b3b;
			}

			.buy {
				width: 200px;
				height: 40px;
				background-color: orange;
				color: black;
				padding: 9px 4px;
				margin-bottom: 20px;
				margin-top: 10px;
				border-radius: 10px;
				text-align: center;
			}

			.add {
				width: 200px;
				height: 40px;
				background-color: yellow;
				color: black;
				padding: 9px 4px;
				border-radius: 10px;
				text-align: center;
			}

			.add,
			.buy h3 {
				font-size: 18px;
			}

			.achat {
			margin-left: 500px;
			}
			.achat a{
				text-decoration: none;
			}
		</style>

		<Section>

			<div class="product-container">
				<div class="product_image">
					<img src="images/medicaments/<?php echo $item['name']; ?>.jpg" alt="<?php echo $item['name']; ?>">
				</div>
				<div class="product-details" style="display:flex;">
					<strong>
						<h2>
							<?php echo $item['name']; ?>
						</h2>
					</strong>
					<br>
					<h4>Categorie :
						<?php echo $item['categorie']; ?>
					</h4>
					<br>
					<br>

					<p> <strong> Description :</strong>
						<?php echo $item['description']; ?>
					</p>
					<br>
					<br>
					<h2 style="color:Red;">
						Price : 
						<?php echo $item['price'];
						$reponse->closeCursor(); ?> 
						<span>DT</span>
					</h2>
					<div class="achat">
						<a href="#">
							<h3 class="buy"> Buy Now</h3>
						</a>
						<a href="#">
							<h3 class="add">Add to cart</h3>
						</a>
					</div>
				</div>
			</div>

		</Section>

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