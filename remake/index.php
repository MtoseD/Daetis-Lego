<!DOCTYPE html>
<html lang="de" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daetis Lego</title>
	<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
	<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&display=swap" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="57x57" href="images/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="images/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
	<link rel="manifest" href="images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<script src="js/modernizr-custom.js"></script>
</head>

<body>
	<!-- navigation -->
	<nav class="pages-nav">
		<div class="pages-nav__item"><a class="link link--page" href="#page-home">Home</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-mystuff">Mein Besitz</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-starWars">Star Wars</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-marvel">Marvel</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-dc">DC</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-architecture">Architecture</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-creator">Creator</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-technic">Technic</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-more">More...</a></div>
		<div class="pages-nav__item pages-nav__item--small link link--faded">© 2021 M-to-se-D</div>
		<div class="pages-nav__item pages-nav__item--small"><a class="link link--faded" href="https://m-to-se-d.ch/" target="_blank">Hub-Page</a></div>
		<div class="pages-nav__item pages-nav__item--social">
			<a class="link link--social link--faded" href="https://github.com/MtoseD" target="_blank"><i class="fa fa-github"></i><span class="text-hidden">GitHub</span></a>
			<a class="link link--social link--faded" href="mailto:gaming_md@bluewin.ch"><i class="fa fa-envelope"></i><span class="text-hidden">LinkedIn</span></a>
		</div>
	</nav>
	<!-- /navigation-->
	<!-- pages stack -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
			<!-- Blueprint header -->
			<header class="bp-header cf">
				<span class="bp-header__present">Blueprint <span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1 class="bp-header__title">Page Stack Navigation</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<nav class="bp-nav">
					<a class="bp-nav__item bp-icon bp-icon--prev" href="http://tympanus.net/Blueprints/ZoomSlider/" data-info="previous Blueprint"><span>Previous Blueprint</span></a>
					<!--a class="bp-nav__item bp-icon bp-icon--next" href="" data-info="next Blueprint"><span>Next Blueprint</span></a-->
					<a class="bp-nav__item bp-icon bp-icon--drop" href="http://tympanus.net/codrops/?p=25311" data-info="back to the Codrops article"><span>back to the Codrops article</span></a>
					<a class="bp-nav__item bp-icon bp-icon--archive" href="http://tympanus.net/codrops/category/blueprints/" data-info="Blueprints archive"><span>Go
							to the archive</span></a>
				</nav>
			</header>
			<img class="poster" src="images/1.jpg" alt="img01" />
		</div>
		<!-- /page -->

		<!-- Mein Besitz -->
		<div id="page-mystuff">
			<?php include "sites/meinbesitz.php"; ?>
		</div>

		<!-- Star Wars -->
		<div id="page-starWars">
			<?php include "sites/starwars.php"; ?>
		</div>

		<!--  -->
		<div class="page" id="page-software">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Software &amp; Downloads</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"I decided to pick the diet that I thought would maximize my chances of long-term survival." &mdash;
					Al Gore
				</p>
			</header>
			<img class="poster" src="images/3.jpg" alt="img03" />
		</div>
		<div class="page" id="page-custom">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Customization &amp; Settings</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"You have to make a conscious decision to change for your own well-being, that of your family and
					your country." &mdash;Bill Clinton
				</p>
			</header>
			<img class="poster" src="images/4.jpg" alt="img04" />
		</div>
		<div class="page" id="page-training">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Training &amp; Learning Center</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"The moment I began to understand what was going on with the treatment of animals, it led me more
					and more in the way of the path I am [on] now, which is a complete vegan." &mdash; Bryan Adams
				</p>
			</header>
			<img class="poster" src="images/5.jpg" alt="img05" />
		</div>
		<div class="page" id="page-buy">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Where to buy</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"When people ask me why I don't eat meat or any other animal products, I say, 'Because they are
					unhealthy and they are the product of a violent and inhumane industry.'" &mdash;
				</p>
			</header>
			<img class="poster" src="images/6.jpg" alt="img06" />
		</div>
		<div class="page" id="page-blog">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Blog &amp; News</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"The question is not, 'Can they reason?' nor, 'Can they talk?' but rather, 'Can they suffer?"
					&mdash; Jeremy Bentham
				</p>
			</header>
			<img class="poster" src="images/1.jpg" alt="img01" />
		</div>
		<div class="page" id="page-contact">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Contact</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"Man is the only animal that can remain on friendly terms with the victims he intends to eat until
					he eats them." &mdash; Samuel Butler
				</p>
			</header>
			<img class="poster" src="images/4.jpg" alt="img04" />
		</div>
	</div>
	<!-- /pages-stack -->
	<button class="menu-button"><span>Menu</span></button>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
</body>

</html>