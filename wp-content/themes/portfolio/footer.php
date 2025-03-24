</main>
<footer class="footer">
	<nav>
		<h2 class="hidden">Footer navigation</h2>
		<div>
			<h3>My Information</h3>
			<p itemprop="telephone">+32(0)495/79 39 47</p>
			<p itemprop="email">brunome638@gmail.com</p>
			<p itemscope itemtype="https://schema.org/PostalAddress"><span
						itemprop="streetAddress">Rue Jean Hubin
				14</span>, <span itemprop="postalCode">4680</span> <span itemprop="addressLocality">Oupeye</span></p>
		</div>
		<div>
			<h3>Social medias</h3>
			<ul>
				<li><a href="https://www.instagram.com/bru.m3/" itemprop="url">Instagram</a></li>
				<li><a href="https://www.linkedin.com/in/bruno-mar%C3%A9e-0148b2251/"
				       itemprop="url">Linkedin</a></li>
				<li><a href="https://github.com/Maree-Bruno" itemprop="url">Github</a></li>
			</ul>
		</div>
		<div>
			<h3>Navigation</h3>
			<ul>
                <?php foreach (portfolio_get_navigation_links('main') as $link): ?>
					<li><a href="<?= $link->url ?>"><?= $link->label ?></a></li>
                <?php endforeach; ?>
			</ul>
		</div>
		<div>
			<h3>Legal mentions</h3>
			<a href="<?= esc_url(get_home_url().'/legal-informations/') ?>" itemprop="url">Legal
				informations</a>
			<p>All rights reserved</p>
			<p itemprop="name">Bruno Marée 2024 ©</p>
			<p itemprop="name">Created by Bruno Marée</p>
		</div>
	</nav>
</footer>
<?php wp_footer(); ?>
</body>
</html>
