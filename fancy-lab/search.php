<?php
/**
 * The search template file
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
                        <div class="col">
                            <p>Search results for: <?php echo get_search_query(); ?></p>
                            <?php

                            get_search_form();

                            if (have_posts()) :
                                while (have_posts()) : the_post();
                                   get_template_part('template-parts/content', 'search');
                                endwhile;
                                the_posts_pagination([
                                    'prev_text' => 'previous',
                                    'next_text' => 'next'
                                ]);
                            else:
                                ?>
                                <p>No results for your query.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

<?php get_footer(); ?>