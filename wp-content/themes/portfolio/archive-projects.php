<?php
/*
 * Template Name: projects
 */
?>
<?php
$filter_slug = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : '';

$brands = get_terms([
    'taxonomy' => 'brands',
    'hide_empty' => false,
]);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = [
    'post_type' => 'projects',
    'paged' => $paged,
];

if ($filter_slug) {
    $args['tax_query'] = [
        [
            'taxonomy' => 'brands',
            'field' => 'slug',
            'terms' => $filter_slug,
        ]
    ];
}
$terms = get_terms([
    'taxonomy' => 'brands',
    'hide_empty' => false,
]);


$current_filter = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : '';

$projects = new WP_Query($args);
?>
<?php get_header(); ?>
<section class="archive-section" itemscope itemtype="https://schema.org/CreativeWork">
	<h2 class="title font-title">Projects</h2>
	<div class="archive-filter">
        <?php if ($brands): ?>
			<ul class="archive-filter-tag-list flex flex-row justify-evenly">
                <?php
                $projects_page = get_page_by_path('projects');
                $projects_page_url = get_permalink($projects_page); ?>
				<li class="archive-filter-tag-item font-text <?= ($current_filter === '') ? 'archive-filter-tag-item--active' : ''; ?>" itemprop="genre">
					<a class="archive-filter-tag-link <?= ($current_filter === '') ? 'archive-filter-tag-link--active' :
						''; ?>" href="<?= esc_url(get_permalink($projects_page)) ?>">
						All
					</a>
				</li>
                <?php foreach ($brands as $term): ?>
					<li class="archive-filter-tag-item font-text <?= ($current_filter === $term->slug) ? 'archive-filter-tag-item--active' : ''; ?>"
					    itemprop="genre">
						<a class="archive-filter-tag-link <?= ($current_filter === $term->slug) ? 'archive-filter-tag-link--active' : ''; ?>"
						   href="<?= esc_url($projects_page_url.'?filter='.$term->slug); ?>">
                            <?= esc_html($term->name); ?>
						</a>
					</li>
                <?php endforeach; ?>
			</ul>
        <?php endif; ?>
	</div>

	<div class="archive-container">
        <?php global $projects; ?>
        <?php get_template_part('includes/section', 'archive') ?>
	</div>
	<div>
		<div class="previous font-title">
            <?php previous_posts_link() ?>
		</div>
        <?= paginate_links() ?>
		<div class="next font-title">
            <?php next_posts_link() ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
