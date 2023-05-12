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
            <form method="GET" action="searchform.php">
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
                        <svg class="a-icon a-icon--default" viewBox="0 0 100 100">
                            <path
                                d="M94.91 50.1227C94.91 52.0318 93.3611 53.5808 91.4519 53.5808H8.45807C6.54893 53.5808 5 52.0318 5 50.1227C5 48.2135 6.54893 46.6646 8.45807 46.6646H91.4519C93.3611 46.6646 94.91 48.2135 94.91 50.1227ZM8.45807 25.9162H91.4519C93.3611 25.9162 94.91 24.3672 94.91 22.4581C94.91 20.5489 93.3611 19 91.4519 19H8.45807C6.54893 19 5 20.5489 5 22.4581C5 24.3672 6.54893 25.9162 8.45807 25.9162ZM91.4519 74.3292H8.45807C6.54893 74.3292 5 75.8782 5 77.7873C5 79.6965 6.54893 81.2454 8.45807 81.2454H91.4519C93.3611 81.2454 94.91 79.6964 94.91 77.7873C94.91 75.8782 93.3611 74.3292 91.4519 74.3292Z">
                            </path>
                        </svg>
                    </div>
                    <a href="index.php#categorie_jump" id="cat">Categories</a>
                </li>
                <li><a href="index.php#products_jump">Products</a></li>
                <li><a href="about_us.html">About us</a></li>
                <li><a href="mailto:khalilbenmakhlouf2@gmail.com">Contact</a></li>
            </ul>

        </nav>


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
                    $query = $_GET['query'];
                    if ($query != '') {
                        $reponse = $bdd->query("SELECT * FROM produits WHERE name LIKE '%$query%' ORDER BY price asc");
                    } else {
                        $reponse = $bdd->query("SELECT * FROM produits ORDER BY price asc");
                    }

                    // Affichage des produits
                    while ($donnees = $reponse->fetch()) {
                        ?>
                        <li>
                            <a href="produit.php?item=<?php echo $donnees['name']; ?>">
                                <img src="images/medicaments/<?php echo $donnees['name']; ?>.jpg"
                                    alt="<?php echo $donnees['name']; ?>">
                                <div class="prodetails">
                                    <center>
                                        <h3>
                                            <?php echo $donnees['name']; ?>
                                        </h3>
                                        <h3>
                                            <?php echo $donnees['price']; ?> <span>DT</span>
                                        </h3>
                                        <h4>
                                            <?php echo $donnees['categorie']; ?>
                                        </h4>
                                    </center>
                                </div>
                            </a>
                        </li>
                        <?php
                    }
                    $reponse->closeCursor();
                    ?>
                </ul>
        </section>
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