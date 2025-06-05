<?php
/*
 * Template Name: Home
 */
?>
<?php get_header(); ?>
<section class="hero flex flex-col content-center justify-around" itemscope itemtype="https://schema.org/Person">
	<div class="capybara">
		<figure class="capybara-figure">
			<img class="capybara-img" src="/wp-content/themes/portfolio/resources/img/capybara-320w.png"
			     alt="un capybara" width="320" height="213">
		</figure>
	</div>
	<div class="hero-container">
        <?php if (have_rows('layout')): while (have_rows('layout')): the_row(); ?>
            <?php $image = get_sub_field('background-image'); ?>
            <?php if (!empty($image)): ?>
				<figure class="hero-fig">
					<div class="hero-deco"></div>
                    <?= responsive_image($image, [
                        'lazy' => 'lazy',
                        'class' => 'hero-image',
                    ]) ?>
				</figure>
            <?php endif ?>
			<h2 class="hero-title font-title flex flex-col text-5xl">
				<strong class="hero-title-fn flex" itemprop="givenName">Bruno</strong>
				<strong class="hero-title-ln flex" itemprop="familyName">Marée</strong>
				<strong class="hero-title-title text-3xl flex " itemprop="jobTitle">Web Developer</strong>
			</h2>
        <?php endwhile; endif; ?>
	</div>
</section>
<section class="about flex flex-col" id="about">
	<h2 class="sr-only">About me</h2>
	<div class="about-main flex flex-col justify-between">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (have_rows('layout')): while (have_rows('layout')): the_row(); ?>
                <?php if (get_row_layout() === 'layout'): ?>
					<div class="about-main-content flex flex-col content-center justify-around" itemprop="description">
                        <?php $image = get_sub_field('profile_pic'); ?>
                        <?php if ($image): ?>
							<figure class="about-fig" itemscope itemtype="https://schema.org/ImageObject">
								<div class="about-front-capybara">
									<figure class="about-front-capybara-figure">
										<img class="about-front-capybara-img"
										     src="/wp-content/themes/portfolio/resources/img/capybara-front-320w.png"
										     alt="un capybara" width="320" height="213"
									</figure>
								</div>
                                <?= responsive_image($image, [
                                    'lazy' => 'lazy',
                                    'class' => 'about-img',
                                ]) ?>

                                <?php get_template_part('includes/section', 'slider') ?>
							</figure>
                        <?php endif; ?>
						<div class="about-content flex flex-col">
							<div class="about-content-detail font-title">
								<span itemprop="birthDate"><?= get_sub_field('age'); ?></span>
								<strong>|</strong>
								<span itemprop="jobTitle"><?= get_sub_field('title'); ?></span>
							</div>
							<div class="about-content-description font-text flex flex-col">
								<span itemprop="description"><?= get_sub_field('description'); ?></span>
							</div>
						</div>
					</div>
					<div class="about-career flex flex-col">
						<h3 class="about-career-title font-title text-2xl">My Career</h3>
                        <?php if (have_rows('career')): ?>
							<ul class="about-career-list flex flex-row justify-around">
                                <?php while (have_rows('career')): the_row(); ?>
									<li class="about-career-item flex flex-col" itemscope
									    itemtype="https://schema.org/Role">
										<meta itemprop="roleName" content="<?php the_sub_field('qualification'); ?>">

										<div class="about-career-time flex flex-row font-title">
											<time itemprop="startDate"
											      datetime="<?php the_sub_field('starting_year'); ?>">
                                                <?php the_sub_field('starting_year'); ?>
											</time>
											<p>&nbsp;–&nbsp;</p>
											<time itemprop="endDate" datetime="<?php the_sub_field('ending_year'); ?>">
                                                <?php the_sub_field('ending_year'); ?>
											</time>
										</div>

										<div class="about-career-qualification font-span" itemprop="roleName">
                                            <?php the_sub_field('qualification'); ?>
										</div>

										<div class="about-career-place font-text" itemprop="subjectOf" itemscope
										     itemtype="https://schema.org/Organization">
											<span itemprop="name"><?php the_sub_field('place'); ?></span>
										</div>
									</li>

                                <?php endwhile; ?>
							</ul>
                        <?php endif; ?>
					</div>
                <?php endif; ?>
            <?php endwhile; else: ?>
				Nothing about me
            <?php endif; ?>
        <?php endwhile; endif;
        wp_reset_postdata(); ?>
	</div>
</section>
<section class="project project-section flex flex-col">
	<h2 class="font-title title">My latest projects</h2>
	<div class="project-container flex flex-col justify-evenly content-center">
        <?php
        $projects = new WP_Query([
            'post_type' => 'projects',
            'posts_per_page' => 3
        ]);
        if ($projects->have_posts()): while ($projects->have_posts()): $projects->the_post(); ?>
            <?php if (have_rows('layout')): while (have_rows('layout')): the_row(); ?>
                <?php if (get_row_layout() === 'layout'): ?>
					<article class="article" itemscope itemtype="https://schema.org/CreativeWork">
						<a class="article-link" href="<?php the_permalink(); ?>" itemprop="url">
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<figure class="article-fig" itemprop="image">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?= get_the_post_thumbnail(null, 'blog-small',
                                                    ['class' => 'article-image']) ?>
                                            <?php endif; ?>
										</figure>
										<h3 class="article-title font-title" itemprop="name">
                                            <?php the_title(); ?>
										</h3>
									</div>
									<div class="flip-card-back flex flex-col content-center justify-between">
										<div class="flip-card-back-background">
											<h3 class="article-title article-title-back font-title" itemprop="name">
                                                <?php the_title(); ?>
											</h3>
											<div class="article-presentation text-sm font-text" itemprop="description">
                                                <?php the_sub_field('resume'); ?>
											</div>
										</div>
										<p class="article-more font-title">See more</p>
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
