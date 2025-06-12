<?php

use Src\ContactForm;

// Démarrer le système de sessions pour pouvoir afficher des messages de feedback venant des formulaires.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once(__DIR__.'/src/ContactForm.php');

//theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


//Menus
register_nav_menu('main', 'Navigation principale, en-tête du site');
register_nav_menu('footer', 'Navigation secondaire, navigation du pied-de-page');
function init_remove_support(): void
{
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
    remove_post_type_support('product', 'editor');
}

add_action('init', 'init_remove_support', 100);
/*
 * Disable guttenberg bc it's shitty
 */
add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');
add_action('wp_enqueue_scripts', static function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
},
    20);
function portfolio_get_navigation_links(string $location): array
{
    // Pour $location, retrouver le menu.
    $locations = get_nav_menu_locations();
    $menuId = $locations[$location] ?? null;

    // Au cas où il n'y a pas de menu assignés à $location, renvoyer un tableau de liens vide.
    if (is_null($menuId)) {
        return [];
    }

    // Pour ce menu, récupérer les liens
    $items = wp_get_nav_menu_items($menuId);

    // Formater les liens en objets pour ne garder que "URL" et "label" comme propriétés
    foreach ($items as $key => $item) {
        $items[$key] = new stdClass();
        $items[$key]->url = $item->url;
        $items[$key]->label = $item->title;
        $items[$key]->icon = get_field('icon', $item);
    }

    // Retourner le tableau de liens formatés
    return $items;
}

function portfolio_get_template_page(string $template): int|WP_Post|null
{
    $query = new WP_Query([
        'post_type' => 'page',
        'post_status' => 'publish',
        'meta_query' => [
            [
                'key' => '_wp_page_template',
                'value' => $template.'.php',
            ],
        ]
    ]);
    return $query->posts[0] ?? null;
}

// Fonctions propres au thème :

// 1. Charger un fichier "public" (asset/image/css/script/...) pour le front-end.
function portfolio_asset(string $file): string
{
    return get_template_directory_uri().'/public/'.$file;
}

//custom images sizes
add_image_size('blog-large', 800, 600);
add_image_size('blog-medium', 640, 480);
add_image_size('blog-small', 320, 240, true);
add_image_size('blog-xsmall', 240, 200);

//register side bars
function my_sidebars(): void
{
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}

add_action('widgets_init', 'my_sidebars');

function project_post_type(): void
{
    $args = [
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project',
        ],
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'thumbnail', 'editor', 'page-attributes'],
    ];
    register_post_type('projects', $args);
}

add_action('init', 'project_post_type');


function project_taxonomy(): void
{
    $args = [
        'labels' => [
            'name' => 'brands',
            'singular_name' => 'brand',
        ],
        'public' => true,
        'hierarchical' => true,
    ];
    register_taxonomy('brands', ['projects'], $args);
}

add_action('init', 'project_taxonomy');


function portfolio_execute_contact_form(): void
{
    $config = [
        'nonce_field' => 'contact_nonce',
        'nonce_identifier' => 'portfolio_contact_form',
    ];

    (new ContactForm($config, $_POST))
        ->sanitize([
            'firstname' => 'text_field',
            'lastname' => 'text_field',
            'email' => 'email',
            'message' => 'textarea_field',
        ])
        ->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
        ])
        ->save(
            title: fn($data) => $data['firstname'].' '.$data['lastname'].' <'.$data['email'].'>',
            content: fn($data) => $data['message'],
        )
        ->send(
            title: fn($data) => 'Nouveau message de '.$data['firstname'].' '.$data['lastname'],
            content: fn($data
            ) => 'Prénom: '.$data['firstname'].PHP_EOL.'Nom: '.$data['lastname'].PHP_EOL.'Email: '.$data['email'].PHP_EOL.'Message:'.PHP_EOL.$data['message'],
        )
        ->feedback();
}

add_action('admin_post_nopriv_portfolio_contact_form', 'portfolio_execute_contact_form');
add_action('admin_post_portfolio_contact_form', 'portfolio_execute_contact_form');

// Travailler avec la session de PHP
function portfolio_session_flash(string $key, mixed $value): void
{
    if (!isset($_SESSION['portfolio_flash'])) {
        $_SESSION['portfolio_flash'] = [];
    }

    $_SESSION['portfolio_flash'][$key] = $value;
}

function portfolio_session_get(string $key)
{
    if (isset($_SESSION['portfolio_flash']) && array_key_exists($key, $_SESSION['portfolio_flash'])) {
        // 1. Récupérer la donnée qui a été flash.
        $value = $_SESSION['portfolio_flash'][$key];
        // 2. Supprimer la donnée de la session.
        unset($_SESSION['portfolio_flash'][$key]);
        // 3. Retourner la donnée récupérée.
        return $value;
    }

    // La donnée n'existait pas dans la session flash, on retourne null.
    return null;
}

function responsive_image($image, $settings): bool|string
{
    if (empty($image)) {
        return '';
    }

    $image_id = '';

    if (is_numeric($image)) {
        $image_id = $image;
    } elseif (is_array($image) && isset($image['ID'])) {
        $image_id = $image['ID'];
    } else {
        return ''; // Aucun ID valide
    }

    $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
    $image_post = get_post($image_id);
    $title = $image_post->post_title ?? '';
    $name = $image_post->post_name ?? '';
	$width = $image_post->width ?? '';
	$height = $image_post->height ?? '';

    $src = wp_get_attachment_image_url($image_id, 'full');
    $srcset = wp_get_attachment_image_srcset($image_id, 'full');

    // Priorité à un "sizes" personnalisé
    $sizes = $settings['custom_sizes'] ?? wp_get_attachment_image_sizes($image_id, 'full');

    // Ex : (min-width: 920px) 620px, 100vw
    if (empty($settings['custom_sizes'])) {
        // Valeur par défaut : image prend toute la largeur en dessous de 920px, et 620px au-delà
        $sizes = '(min-width: 920px) 620px, 100vw';
    }

    $lazy = $settings['lazy'] ?? 'eager';

    $class = '';
    if ( ! empty( $settings['class'] ) ) {
        $class = is_array( $settings['class'] ) ? implode( ' ', $settings['class'] ) : $settings['class'];
    }

    ob_start();
    ?>
	<picture>
		<img
				src="<?= esc_url($src) ?>"
				alt="<?= esc_attr($alt) ?>"
				loading="<?= esc_attr($lazy) ?>"
				srcset="<?= esc_attr($srcset) ?>"
				sizes="<?= esc_attr($sizes) ?>"
				class="<?= esc_attr($class) ?>"
				width="<?= esc_attr($width) ?>"
				height="<?= esc_attr($height) ?>"
		>
	</picture>
    <?php
    return ob_get_clean();
}