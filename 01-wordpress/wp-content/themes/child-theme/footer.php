<?php
/**
 * The default footer template
 *
 * @package     WordPress
 * @subpackage  Hoverboard
 * @since       0.1.0
 */
?>

    <footer id="site-credits" class="container">
        <div class="row">
            <div class="col-sm-6 text-muted credit">
                <p>
                    All content copyright &copy; 
                    <a href="<?php echo home_url('/'); ?>" 
                       rel="home"><?php bloginfo('name', 'display'); ?></a>
                </p>
            </div>
            <div class="col-sm-6 text-muted text-right credit">
                <p>
                    Modified by
										<a href="https://github.com/ashawhat">Ashley Lee</a>
                </p>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>
