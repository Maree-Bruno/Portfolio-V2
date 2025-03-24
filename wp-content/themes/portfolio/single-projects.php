<?php get_header(); ?>
<div>
	<h2 itemprop="name" class="font-title text-7xl"><?= get_field('project_title')
        ?></h2>
	<div>
		<div>
            <?php
            $image = get_field('image1');
            if (!empty($image)):
                $image_url = $image['sizes']['blog-large'];
                ?>
				<img src="<?= esc_url($image_url) ?>"
				     alt="<?= esc_attr($image['alt']) ?>" itemprop="image"/>
            <?php endif; ?>
			<p itemprop="description"><?= get_field('project_presentation1') ?></p>

			<figure>
                <?php
                $image = get_field('image2');
                if (!empty($image)):
                    $image_url = $image['sizes']['blog-large'];
                    ?>
					<img src="<?= esc_url($image_url); ?>"
					     alt="<?= esc_attr($image['alt']); ?>" itemprop="image"/>
                <?php endif; ?>
			<p itemprop="description"><?= get_field('project_presentation2') ?></p>
			</figure>
		</div>

		<div>
            <?php if (get_field('website_link')): ?>
				<div>
					<a href="<?= get_field('website_link') ?>" itemprop="url">Visit the website</a>
				</div>
            <?php endif; ?>
			<p>Or you can also see it on github.</p>
			<div>
				<a href="<?= get_field('website_link-github') ?>" itemprop="url">Github</a>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
