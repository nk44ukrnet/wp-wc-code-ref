<article class="col">
    <h1><?php the_title(); ?></h1>
    <div>
        <?php the_content(); ?>

        <?php
        if (comments_open() || get_comments_number()):
            comments_template();
        endif;
        ?>
    </div>
</article>