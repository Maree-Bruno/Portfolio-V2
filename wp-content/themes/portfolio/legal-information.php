<?php
/*
 * Template Name: legal
 */
?>
<?php get_header(); ?>
	<section class="legal flex flex-col content-center ">
		<h2 class="legal-title title text-3xl font-title"><?= get_field('title') ?></h2>
		<div class="legal-description font-text"><?= get_field('description') ?></div>
        <?php if (have_rows('legal')): ?>
			<ul class="legal-ul flex flex-col">
                <?php while (have_rows('legal')): the_row(); ?>
					<li class="legal-li">
						<h3 class="legal-li-title font-title text-xl"><?php the_sub_field('title');
                            ?></h3>
						<div class="legal-li-description font-text">
                            <?php the_sub_field('description'); ?>
						</div>
					</li>
                <?php endwhile; ?>
			</ul>
        <?php endif; ?>
	</section>
<?php get_footer(); ?>