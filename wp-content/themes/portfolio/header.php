<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta property="og:description" name="description" content="<?php bloginfo('description'); ?>">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta property="og:locale" content="fr_FR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?=get_bloginfo('name') ?>">
	<meta property="og:url" content="<?= home_url($_SERVER['REQUEST_URI']) ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name');
        wp_title($sep = '·') ?></title>
	<link rel="stylesheet" href="<?= portfolio_asset('css/main.css'); ?>">
	<script defer src="<?= portfolio_asset('js/main.js') ?>"></script>
    <?php wp_head(); ?>

</head>
<body class="body">
<?php wp_body_open(); ?>
<header class="header">
	<h1 class="hidden"><?php bloginfo('name');?></h1>
	<nav class="nav">
		<h2 class="hidden">Main navigation</h2>
		<div class="nav-container">
			<label for="burger" class="sr-only">Burger menu</label>
			<input type="checkbox" id="burger" name="burger">
			<div class="burger-wrapper">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<ul class="nav-list flex flex-col justify-around">
                <?php foreach (portfolio_get_navigation_links('main') as $link): ?>
					<li class="nav-list-item">
						<a href="<?= $link->url ?>" data-page="
						<?= $link->label ?>" class="nav-list-link">
							<div class="nav-list-item-<?= $link->icon ?>">
                                <?php
                                $svg_path = get_template_directory()."/resources/img/".$link->icon.".svg";
                                if (file_exists($svg_path)) {
                                    echo file_get_contents($svg_path);
                                } ?>
							</div>
							<p class="nav-list-link-text text-xl"><?= $link->label ?></p>
						</a>
					</li>
                <?php endforeach; ?>
			</ul>

		</div>
	</nav>
</header>
<main class="main">
	<div class="content">

