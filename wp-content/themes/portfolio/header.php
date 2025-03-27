<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name');
        wp_title($sep = '·') ?></title>
	<link rel="stylesheet" href="<?= portfolio_asset('css/main.css'); ?>">
    <?php wp_head(); ?>

</head>
<body <?php add_data_page_attribute(); ?> >
<?php wp_body_open(); ?>
<header>
	<h1 class="hidden"><?php bloginfo('name'); ?></h1>

	<nav>
		<h2 class="hidden">Main navigation</h2>
		<ul class="">
            <?php foreach (portfolio_get_navigation_links('main') as $link): ?>
				<li>
					<a href="<?= $link->url ?>" data-page="<?= $link->label ?>"><?= $link->label ?></a>
				</li>
            <?php endforeach; ?>
		</ul>
	</nav>
</header>
<main>

