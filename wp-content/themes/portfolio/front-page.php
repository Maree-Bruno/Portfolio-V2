<?php
/*
 * Template Name: Home
 */
?>
<?php get_header(); ?>
<div class="capybara">
	<figure class="capybara-figure">
		<img class="capybara-img" src="/wp-content/themes/portfolio/resources/img/capybara-320w.png"
		     alt="un capybara" width="320" height="213">
	</figure>
</div>
<section class="project">
	<h2 class="font-title title">My latest projects</h2>
	<div class="project-container flex flex-row justify-between">
        <?php
        $projects = new WP_Query([
            'post_type' => 'projects',
            'posts_per_page' => 3
        ]);
        if ($projects->have_posts()): while ($projects->have_posts()):
            $projects->the_post(); ?>
	        <article class="article ">
		        <a class="article-link" href="<?php the_permalink(); ?>">
			        <div class="flip-card">
				        <div class="flip-card-inner">
					        <div class="flip-card-front">
                                <?php if (has_post_thumbnail()) ?>
                                <?= get_the_post_thumbnail(null, 'blog-small', ['class' => 'article-image']) ?>
						        <h3 class="article-title font-title">
                                    <?php the_title(); ?>
						        </h3>
					        </div>
					        <div class="flip-card-back">
						        <h3 class="article-title font-title">
                                    <?php the_title(); ?>
						        </h3>
						        <div class="article-presentation text-sm">
                                    <?= get_field('project_presentation1') ?>
						        </div>
						        <p class="article-more">See more</p>
					        </div>
				        </div>
			        </div>
		        </a>
	        </article>
        <?php endwhile; else: ?>
			<p class="projects__empty">There is no projects available.</p>
        <?php endif;
        wp_reset_query(); ?>
	</div>
</section>

<?php get_footer(); ?>
