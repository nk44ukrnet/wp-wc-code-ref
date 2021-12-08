<?php
/**
 * The archive template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

get_header();
?>

    <div class="content-area">
        <main>
            <section class="lab-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-8 col-12">
                            <?php
                            the_archive_title('<h1 class="article-title">', '</h1>');
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                                    get_template_part('template-parts-content', 'archive');
                                endwhile;
                                the_posts_pagination([
                                    'prev_text' => 'previous',
                                    'next_text' => 'next'
                                ]);
                            else:
                                ?>
                                <p>Nothing to display</p>
                            <?php endif; ?>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </section>
        </main>
    </div>

<?php get_footer(); ?>