<?php get_header() ?>
<section class="error-page flex flex-col content-center justify-center " itemscope itemtype="https://schema.org/Person">
	<h2 class="error-page-title font-title">Error 404 - Page not Found</h2>
	<div class="error-page-container flex flex-col">
		<p class="error-page-text flex flex-col content-center justify-center font-text">Oops! It looks like
			the page
			you’re trying to
			reach doesn’t exist. <br>
			Please check the URL or explore one of the links below.</p>

		<nav class="error-page-nav">
			<ul class="error-page-list flex flex-row justify-between">
                <?php foreach (portfolio_get_navigation_links('main') as $link): ?>
					<li><a href="<?= $link->url ?>" class="error-page-link font-title"
					       itemprop="url"><?= $link->label
                            ?></a></li>
                <?php endforeach; ?>
			</ul>
		</nav>
	</div>
</section>
<?php get_footer() ?>
