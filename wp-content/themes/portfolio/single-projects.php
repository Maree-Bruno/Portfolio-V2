<?php get_header(); ?>
<?php if (have_rows('layout')): while (have_rows('layout')): the_row();
    if (get_row_layout() === 'layout'): ?>
		<section class="single-project flex flex-col justify-center content-center" itemscope
		         itemtype="https://schema.org/CreativeWork">
			<h2 itemprop="name" class="single-project-title title font-title text-2xl">
                <?php the_sub_field('project_title') ?>
			</h2>
			<div class="single-project-content flex flex-col">
				<div class="single-project-presentation flex flex-col-reverse justify-between content-center">
					<div class="flex flex-col justify-around single-project-presentation-content">
						<div class="tag">
                            <?php if ($brands = get_the_terms(get_the_ID(), 'brands')): ?>
								<ul class="tag-list">
                                    <?php foreach ($brands as $term): ?>
										<li class="tag-item font-text text-lg" itemprop="genre"><?= $term->name; ?></li>
                                    <?php endforeach; ?>
								</ul>
                            <?php endif; ?>
						</div>
						<div class="single-project-content-text">
							<h3 class="single-project-content-title font-title text-lg">Summary</h3>
							<div itemprop="description">
                                <?php the_sub_field('project_presentation1') ?>
							</div>
						</div>
					</div>
					<figure class="single-project-content-fig flex justify-center">
						<div class="about-front-capybara">
							<figure class="about-front-capybara-figure">
								<img class="about-front-capybara-img"
								     src="/wp-content/themes/portfolio/resources/img/capybara-front-320w.png"
								     alt="un capybara" width="320" height="213"
							</figure>
						</div>
                        <?php
                        $image = get_sub_field('image1');
                        if (!empty($image)):
                            $image_url = $image['sizes']['blog-medium'];
                            ?>
                            <?= responsive_image($image, [
                            'lazy' => 'lazy',
                            'class' => 'single-project-content-img',
                        ]) ?>

                        <?php endif; ?>
					</figure>
				</div>

				<div class="single-project-colors">
                    <?php if (have_rows('color')): ?>
						<ul class="single-project-colors-list flex flex-row flex-1 justify-between content-center">
                            <?php while (have_rows('color')): the_row();
                                $color_code = get_sub_field('color-code'); ?>
								<li class="single-project-colors-item text-lg"
								    style="background-color: <?php echo esc_attr($color_code); ?>;">
                                    <?php echo esc_html($color_code); ?>
								</li>
                            <?php endwhile; ?>
						</ul>
                    <?php endif; ?>
				</div>

				<section class="single-project-gallery flex flex-col">
					<div class="single-project-gallery-sticky">
						<div class="single-project-gallery-display flex flex-col justify-center content-center">
							<div class="single-project-gallery-frame">
								<h3 class="sr-only">Project gallery</h3>
								<div class="single-project-gallery-layout">
                                    <?php
                                    $images = get_sub_field('gallery');
                                    if ($images): ?>
										<div class="single-project-gallery-list">
                                            <?php foreach ($images as $image): ?>
												<a href="<?= esc_url($image['sizes']['large']) ?>"
												   title='Click on it to see the gallery'
												   data-fancybox="gallery"
												   class="single-actuality-gallery-link"
												   itemprop="associatedMedia" itemscope
												   itemtype="https://schema.org/ImageObject">
													<figure class="single-project-gallery-fig">
														<meta itemprop="contentUrl"
														      content="<?= esc_url($image['url']) ?>">
                                                        <?= responsive_image($image,
                                                            ['lazy' => 'lazy', 'class' => 'single-project-gallery-img']
                                                        ) ?>
													</figure>
												</a>
                                            <?php endforeach; ?>
										</div>
                                    <?php endif; ?>
								</div>
								<p class="single-project-gallery-scroll font-title">Gallery</p>
							</div>

							<div class="single-project-links flex flex-row justify-between content-center">
                                <?php if (get_sub_field('website_link')): ?>
									<a href="<?php the_sub_field('website_link') ?>" itemprop="url"
									   title="Visit the website" class="single-project-link font-title" target="_blank">Website</a>
                                <?php endif; ?>
                                <?php if (get_sub_field('figma')): ?>
									<a href="<?php the_sub_field('figma') ?>" itemprop="url" title="Visit the figma"
									   class="single-project-link single-project-link-figma font-title" target="_blank">Figma</a>
                                <?php endif; ?>
                                <?php if (get_sub_field('website_link-github')): ?>
									<a href="<?php the_sub_field('website_link-github') ?>" itemprop="url"
									   title="Visit github repository" class="single-project-link font-title"
									   target="_blank"
									>Github</a>
                                <?php endif; ?>
							</div>
						</div>
					</div>

					<div class="single-project-features flex flex-col justify-end">
						<h3 class="single-project-features-title font-title text-lg">Features</h3>
                        <?php if (have_rows('features')): ?>
							<ul class="single-project-features-list flex flex-col">
                                <?php while (have_rows('features')): the_row(); ?>
									<li class="single-project-features-item font-text" >
										<h4 class="single-project-features-title font-title"><?php the_sub_field('title'); ?></h4>
										<div class="single-project-features-item font-text " itemprop="featureList">
                                            <?php the_sub_field('feature'); ?>
										</div>
									</li>
                                <?php endwhile; ?>
							</ul>
                        <?php endif; ?>
					</div>
				</section>
			</div>
		</section>
    <?php endif;
endwhile; endif; ?>
<?php get_footer(); ?>
