<div class="about-knowledge">
        <ul class="about-knowledge-list flex flex-row">
            <?php if (have_rows('slider')): while (have_rows('slider')): the_row(); ?>
                <?php $img = get_sub_field('logo'); if ($img): ?>
                    <li class="about-knowledge-list-item">
                        <figure class="about-knowledge-list-item-fig">
                            <img class="about-knowledge-list-item-img"
                                 src="<?= esc_url($img['url']); ?>"
                                 alt="<?= esc_attr($img['alt']); ?>"
                                 width="<?= esc_attr($img['width']); ?>"
                                 height="<?= esc_attr($img['height']); ?>">
                        </figure>
                    </li>
                <?php endif; endwhile; endif; ?>
            <?php if (have_rows('slider')): while (have_rows('slider')): the_row(); ?>
                <?php $img = get_sub_field('logo'); if ($img): ?>
                    <li class="about-knowledge-list-item">
                        <figure class="about-knowledge-list-item-fig">
                            <img class="about-knowledge-list-item-img"
                                 src="<?= esc_url($img['url']); ?>"
                                 alt="<?= esc_attr($img['alt']); ?>"
                                 width="<?= esc_attr($img['width']); ?>"
                                 height="<?= esc_attr($img['height']); ?>">
                        </figure>
                    </li>
                <?php endif; endwhile; endif; ?>
        </ul>
</div>