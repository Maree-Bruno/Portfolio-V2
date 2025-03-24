<?php
/*
 * Template Name: projects
 */
?>

<?php get_header(); ?>
	<h2 aria-level="1">Projects</h2>
	<div>
        <?php get_template_part('includes/section', 'archive') ?>
	</div>
	<div>
		<div>
            <?php previous_posts_link() ?>
		</div>
		<div>
            <?php next_posts_link() ?>
		</div>
	</div>
<?php get_footer(); ?>