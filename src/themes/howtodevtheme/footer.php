<?php
/**
 * The main footer of the theme
 *
 * @package HowToDev
*/
?>
<footer class="site-footer" id="colophon">

    <div class="site-info">
        <nav class="footer-navigation" id="footer-navigation">
            <h2>Menu</h2>
	        <?php wp_nav_menu(array('theme_location' => 'footer-menu')) ?>
        </nav>
        <div class="general-info">
            <h2>General info</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt nihil possimus reprehenderit rerum vero! A alias, consequuntur, dolor dolores enim eos eveniet illo in incidunt quam quasi quos sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, animi aperiam atque cumque delectus dolorem ducimus eius, explicabo fugit harum illo libero maxime nobis obcaecati quasi quibusdam sapiente sequi similique.
            </p>
        </div>
        <div class="social-info">
            <h2>Social Icons</h2>
            <i>icon linkedIN</i>
            <i>icon facebook</i>
            <i>icon twitter</i>
            <i>icon instagram</i>
        </div>
    </div>
    <div class="copyright-info">
        <p>Copyright &#169; 2023. All Rights Reserved</p>
    </div>
</footer>
</div>

    <?php wp_footer(); ?>
</body>
</html>
