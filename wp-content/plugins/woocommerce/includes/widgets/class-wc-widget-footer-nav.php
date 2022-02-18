<?php
/**
 * Layered nav widget
 *
 * @package WooCommerce\Widgets
 * @version 2.6.0
 */

use Automattic\WooCommerce\Internal\ProductAttributesLookup\Filterer;

defined( 'ABSPATH' ) || exit;

/**
 * Widget layered nav class.
 */

class WC_Widget_Footer_Nav extends WC_Widget {
    /**
     * Constructor.
     */
    public function __construct() {
        $this->widget_cssclass    = 'woocommerce widget_footer_nav woocommerce-widget-footer-nav';
        $this->widget_description = __( 'Display a list of attributes to filter products in your store.', 'woocommerce' );
        $this->widget_id          = 'woocommerce_footer_nav';
        $this->widget_name        = __( 'Footer Menu', 'woocommerce' );
        parent::__construct();
    }


/**
 * Output widget.
 *
 * @see WP_Widget
 *
 * @param array $args     Arguments.
 * @param array $instance Widget instance.
 */
    public function widget( $args, $instance ) {
        wc_footer_listing_pages();
}
}