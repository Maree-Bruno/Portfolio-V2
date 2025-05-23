<?php
/*
 * Template Name: Home
 */
?>
<?php get_header(); ?>
	<section class="hero flex flex-col content-center justify-between">
		<div class="capybara">
			<figure class="capybara-figure">
				<img class="capybara-img" src="/wp-content/themes/portfolio/resources/img/capybara-320w.png"
				     alt="un capybara" width="320" height="213">
			</figure>
		</div>
		<div class="hero-container">
			<h2 class="hero-title font-title flex flex-col text-5xl">
				<strong class="hero-title-fn flex justify-center">
					Bruno
				</strong>
				<strong class="hero-title-ln flex justify-end">
					Marée
				</strong>
				<strong class="hero-title-title text-3xl flex justify-center">
					Web Developer
				</strong>
			</h2>
		</div>
		<a href="#about" class="anchor font-title flex flex-row justify-center content-center">Scroll Down</a>
	</section>
	<section class="about flex flex-col" id="about">
		<h2 class="sr-only">About me</h2>
		<div class="about-main flex flex-col justify-between ">
            <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>
            <?php if (have_rows('layout')): while (have_rows('layout')):
            the_row(); ?>
            <?php if (get_row_layout() === 'layout'): ?>
			<div class="about-main-content flex flex-col content-center">
                <?php
                $image = get_sub_field('profile_pic');
                if ($image): ?>
					<figure class="about-fig">
						<img src="<?php echo esc_url($image['sizes']['blog-medium']); ?>"
						     alt="<?php echo esc_attr($image['alt']); ?>"
						     class="about-img"/>
                        <?php get_template_part('includes/section', 'slider') ?>
					</figure>
                <?php endif; ?>
				<div class="about-content flex flex-col">
					<div class="about-content-detail font-title">
                        <?= get_sub_field('age'); ?>
						<strong>|</strong>
                        <?= get_sub_field('title'); ?>
					</div>
					<div class="about-content-description font-text flex flex-col">
                        <?= get_sub_field('description'); ?>
					</div>
				</div>
			</div>

			<div class="about-career flex flex-col ">
				<h3 class="about-career-title font-title text-2xl">My Career</h3>
                <?php if (have_rows('career')): ?>
					<ul class="about-career-list flex flex-row justify-around">
                        <?php while (have_rows('career')): the_row(); ?>
							<li class="about-career-item flex flex-col">
								<div class="about-career-time flex flex-row font-title">
									<time>
                                        <?php the_sub_field('starting_year') ?>
									</time>
									<p>&nbsp;–&nbsp;</p>
									<time>
                                        <?php the_sub_field('ending_year') ?>
									</time>
								</div>
								<div class="about-career-qualification font-span">
                                    <?php the_sub_field('qualification') ?>

								</div>
								<div class="about-career-place font-text">
                                    <?php the_sub_field('place') ?>
								</div>
							</li>
                        <?php endwhile; ?>
					</ul>
                <?php endif; ?>
			</div>
		</div>
        <?php endif; ?>
        <?php endwhile; else: ?>
			Nothing about me
        <?php endif; ?>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>

	</section>
	<section class="project project-section flex flex-col">
		<h2 class="font-title title">My latest projects</h2>
		<div class="project-container flex flex-col justify-evenly content-center">
            <?php
            $projects = new WP_Query([
                'post_type' => 'projects',
                'posts_per_page' => 3
            ]);
            if ($projects->have_posts()): while ($projects->have_posts()):
                $projects->the_post(); ?>

                <?php if (have_rows('layout')): while (have_rows('layout')): the_row(); ?>
                <?php if (get_row_layout() === 'layout'): ?>
					<article class="article ">
						<a class="article-link" href="<?php the_permalink(); ?>">
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<figure class="article-fig">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?= get_the_post_thumbnail(null, 'blog-small',
                                                    ['class' => 'article-image']) ?>
                                            <?php endif; ?>
										</figure>
										<h3 class="article-title font-title">
                                            <?php the_title(); ?>
										</h3>
									</div>
									<div class="flip-card-back flex flex-col content-center justify-between">
										<div class="flip-card-back-background">
											<h3 class="article-title article-title-back font-title">
                                                <?php the_title(); ?>
											</h3>
											<div class="article-presentation text-sm font-text">
                                                <?php the_sub_field('resume'); ?>
											</div>
										</div>
										<p class="article-more">See more</p>
									</div>
								</div>
							</div>
						</a>
					</article>
                <?php endif; ?>
            <?php endwhile; else: ?>
				<p class="projects__empty">There is no projects available.</p>
            <?php endif; ?>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>
		</div>
	</section>

<?php get_footer(); ?>