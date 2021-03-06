<?php
// Default template for singe posts

get_header();
?>

<div id="primary" class="content-area">
    <div id="main">
        <div class="container">
            <div class="row">
                <?php
                while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'single');
                    if (comments_open() || get_comments_number()):
                        comments_template();
                    endif;
                endwhile;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
