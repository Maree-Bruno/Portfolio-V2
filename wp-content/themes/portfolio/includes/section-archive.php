<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
	<p>C'est vide</p>
<?php endif; ?>