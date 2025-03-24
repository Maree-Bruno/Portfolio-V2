<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
		<div>
			<a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) ?>
                <?= get_the_post_thumbnail(null, 'blog-small', ['class' => 'card__content__img']) ?>
				<div>
					<h3 aria-level="3">
                        <?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
					<p>
						See More
					</p>
				</div>
			</a>
		</div>
	</article>

<?php endwhile; else: ?>
<p>C'est vide</p>
<?php endif; ?>