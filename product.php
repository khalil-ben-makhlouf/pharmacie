<!DOCTYPE html>
<html>
<head>
	<title>Care Corner - Votre magasin de médicaments en ligne</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<img src="imagesmain/a29af00190484babaaaadcc1907d1aa8.png" alt="logo1" id="logo1">
		<div class="input-box">
			<i class="uil uil-search"></i>
			<input type="text" placeholder="Search here..." />
			<button class="button">Search</button>
		</div>
		<script>
			const button = document.querySelector(".button");
			button.addEventListener("mousedown", () => button.classList.add("clicked"));
			button.addEventListener("mouseup", () => button.classList.remove("clicked"));	
		</script>
		
	</header>
	<nav>
		<ul>
			<li id="Categories">
			<div class="Categoriesbutton">	
			<svg class="a-icon a-icon--default" viewBox="0 0 100 100" height="30" width="30" style="padding-right: 4px;"><path d="M94.91 50.1227C94.91 52.0318 93.3611 53.5808 91.4519 53.5808H8.45807C6.54893 53.5808 5 52.0318 5 50.1227C5 48.2135 6.54893 46.6646 8.45807 46.6646H91.4519C93.3611 46.6646 94.91 48.2135 94.91 50.1227ZM8.45807 25.9162H91.4519C93.3611 25.9162 94.91 24.3672 94.91 22.4581C94.91 20.5489 93.3611 19 91.4519 19H8.45807C6.54893 19 5 20.5489 5 22.4581C5 24.3672 6.54893 25.9162 8.45807 25.9162ZM91.4519 74.3292H8.45807C6.54893 74.3292 5 75.8782 5 77.7873C5 79.6965 6.54893 81.2454 8.45807 81.2454H91.4519C93.3611 81.2454 94.91 79.6964 94.91 77.7873C94.91 75.8782 93.3611 74.3292 91.4519 74.3292Z"></path></svg>
			</div>
			<div>
			<a href="#" id="cat">Categories</a>
			</div>
			</li>
			<li><a href="#">Products</a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Contact</a></li>
			<li><a  id="member" href="partner/login-page.html">Become a partner</a></li>
		</ul>
	</nav>
</body>