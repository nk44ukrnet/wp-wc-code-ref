<article <?php post_class(); ?>>
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <div class="post-thumbnail">
        <?php
        if (has_post_thumbnail()) :
            the_post_thumbnail('fancy-lab-blog', ['class' => 'img-fuild']);
        endif;
        ?>
    </div>
    <div class="meta">
        <p>Published by <?php the_author_posts_link(); ?>
            on <?php echo get_the_date(); ?>
            <br>
            <?php if (has_category()) : ?>
                Categories: <span><?php the_category(' '); ?></span>
            <?php endif; ?>
            <br>
            <?php if (has_tag()) : ?>
                Tags: <?php the_tags('', ', '); ?>
            <?php endif; ?>
        </p>
    </div>
    <div>
        <?php the_excerpt(); ?>
    </div>
</article>