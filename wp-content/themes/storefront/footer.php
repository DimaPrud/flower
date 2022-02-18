<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-footer-link">
            <a class="footer_a" href="http://flower-bottle.ru/shop/"><p class="str">каталог</p></a>
            <a class="footer_a" href="http://flower-bottle.ru/%d0%be%d1%82%d0%b7%d1%8b%d0%b2%d1%8b/"><p class="str">отзывы</p></a>
            <a class="footer_a" href="http://flower-bottle.ru/privacy-policy/"><p class="str">о нас</p></a>
            <a class="footer_a" href="http://flower-bottle.ru/%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b/"><p class="str">контакты</p></a>
            <a class="footer_a" href="http://flower-bottle.ru/%d1%83%d1%85%d0%be%d0%b4-%d0%b7%d0%b0-%d1%84%d0%bb%d0%be%d1%80%d0%b0%d1%80%d0%b8%d1%83%d0%bc%d0%be%d0%bc/"><p class="str">уход за флорариумом</p></a>
            <a class="footer_a" href="http://flower-bottle.ru/refund_returns/"><p class="str">политика возврата</p></a>
            <a class="footer_a" href="http://flower-bottle.ru/%d0%bf%d0%be%d0%bc%d0%be%d1%89%d1%8c/"><p class="str">помощь</p></a>
        </div>
        <div>

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
