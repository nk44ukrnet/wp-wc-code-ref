<?php

get_header();

?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="error-404">
                <header>
                    <h1>
                        <?php _e('page not found', 'fancy-lab') ?>
                    </h1>
                    <p>
                        <?php _e('404 error', 'fancy-lab') ?>
                    </p>
                </header>
                <?php the_widget('WP_Widget_Recent_Posts', [
                    'title' => __('Take a look at our latests posts', 'fancy-lab'),
                    'number' => 3,
                ]); ?>

            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>
