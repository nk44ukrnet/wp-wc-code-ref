<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy lab
 */

?>
<footer>
    <section class="footer-menu">
        <?php
        wp_nav_menu(['theme_location' => 'fancy_lab_footer_menu'])
        ?>
    </section>
    <section class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <?php
                    if (is_active_sidebar('fancy-lab-sidebar-footer1')) :
                        dynamic_sidebar('fancy-lab-sidebar-footer1');
                    endif;
                    ?>
                </div>
                <div class="col-md-4 col-12">
                    <?php
                    if (is_active_sidebar('fancy-lab-sidebar-footer2')) :
                        dynamic_sidebar('fancy-lab-sidebar-footer2');
                    endif;
                    ?>
                </div>
                <div class="col-md-4 col-12">
                    <?php
                    if (is_active_sidebar('fancy-lab-sidebar-footer3')) :
                        dynamic_sidebar('fancy-lab-sidebar-footer3');
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="copyright-text col-6 col-md-6">
                    <p><?php echo get_theme_mod('set_copyright', 'default value'); ?></p>
                </div>
                <nav class="footer-menu col-6 col-md-6 text-left text-md-right">
                    <?php wp_footer(); ?>
                </nav>
            </div>
        </div>
    </section>
</footer>
</div> <!-- #page.site -->

</body>
</html>