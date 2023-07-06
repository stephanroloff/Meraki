</main>
    <footer class="footer-container">
        <div class="footer-columns">
            <div class="column-1">
                <div class="footer-menu">
                    <?php
                    wp_nav_menu( array(
                    'theme_location'=>'footer-menu',
                    ) )
                    ?>
                </div>
            </div>
            <div class="column-2"></div>
            <div class="column-3"></div>
        </div>
    </footer>
    <?php wp_footer();?>
</body>
</html>