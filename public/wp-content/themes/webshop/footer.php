<footer>
    <div class="container">
        <nav class="col-12 footer">
        <div class="footer__nav">
            <div class="row">
            <div class=" col-4 footer__nav">
                <h1>Optiek-er</h1>
                <p>Kpt Cdt Vinckestraat 19</p>
                <p>8710 Ooigem - belgium</p>
                <p>info@optieker.be</p>
            </div>
            <div class="col-4 footer__products">
                <h3>Producten</h3>
                <p>Brillen</p>
                <p>Zonnebrillen</p>
                <p>Lenzen</p>
                <p>Accessoires</p>
            </div>
            <div class="col-4 footer__signup">
            <?php if (is_active_sidebar( 'footer-form' )) { ?>
                <aside class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-form' ); ?>
                </aside>
            <?php } ?>
            </div>
        </div>
        </div>

            <?php wp_nav_menu(array(
                'theme_location' => 'footer-nav'
            )) ?>

        </nav>
    </div>
    </footer>
</footer>

</body>


</html>