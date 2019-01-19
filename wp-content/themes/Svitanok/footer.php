    <?php global $mytheme; ?>
			<!-- footer -->
			<footer class="wrapper">

                <div class=" footer-item footer-logo">
                    <img class="footer-logo-img" src="<?= $mytheme['logo-footer-img']['url']?>" alt="#">
                </div>
                <div class=" footer-item footer-content">
                    <?= $mytheme['footer-text']?>
                </div>
                <div class="footer-item footer-designed_by">
                    <a href="https://urich.org/" ><img src="../../../wp-content/themes/Svitanok/inc/urich/img/u-rich-logo-white.png" alt="#"></a>
                </div>
            </footer>
			<!-- /footer footer-bg -->
		</div>
		<!-- /wrapper -->



		<?php wp_footer(); ?>
	</body>
</html>
