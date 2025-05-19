<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php if (have_rows('layout')): while (have_rows('layout')): the_row(); ?>
        <?php if (get_row_layout() === 'layout'): ?>
			<article class="article ">
				<a class="article-link" href="<?php the_permalink(); ?>">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
                                <?php if (has_post_thumbnail()): ?>
                                    <?= get_the_post_thumbnail(null, 'blog-small', ['class' => 'article-image']) ?>
                                <?php endif; ?>
								<h3 class="article-title font-title">
                                    <?php the_title(); ?>
								</h3>
							</div>
							<div class="flip-card-back flex flex-col content-center justify-between">
								<div class="flip-card-back-background">
									<h3 class="article-title article-title-back font-title">
                                        <?php the_title(); ?>
									</h3>
									<div class="article-presentation text-sm">
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
		<p>C'est vide</p>
    <?php endif; ?>
<?php endwhile; endif; ?>
