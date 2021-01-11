<body>

    <!-- All the document's HTML goes first. -->

    <!-- Then last, before closing the body tag, add: -->

    <?php wp_footer(); ?>

</body>

<footer>
    <div class="container">
        <nav class="col-12 footer">
        <div class="footer__nav">
            <div class="row">
            <div class=" col-4 footer__contact">
                <h1>Optiek-er</h1>
                <p>Kpt Cdt Vinckestraat 19</p>
                <p>8710 Ooigem - belgium</p>
                <p>info@optieker.be</p>
            </div>
            <div class="col-4 footer__nav">
                <h2>Navigation</h2>
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-nav'
            )) ?>
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

        </nav>
    </div>
</footer>

</body>


</html>