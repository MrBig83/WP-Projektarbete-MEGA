<?php
/*
Plugin Name: MEGA Drone Delivery
Plugin URI: https://woocommerce.com/
Description: This plugin will add Drone Delivery to your WooCommerce-site
Version: 1.0.0
Author: Amanda, Viola, Martin
Author URI: <www class="google se"></www>
*/

// /**
//  * Check if WooCommerce is active
//  */

//  add_action( 'woocommerce_shipping_init', 'techiepress_dhl_shipping_init' );

//  function techiepress_dhl_shipping_init() {
//   if ( ! class_exists( 'WC_TECHIEPRESS_DHL_SHIPPING') ) {
//   class WC_TECHIEPRESS_DHL_SHIPPING extends WC_Shipping_Method {
 
//   public function __construct() {
// 	$this->id = 'techipress_dhl_shipping'; // Id for your shipping method. Should be uunique.
// 	$this->method_title = __( 'Techiepress DHL Shipping' ); // Title shown in admin
// 	$this->method_description = __( 'Description of your Techiepress DHL Shipping' ); // Description shown in admin
// 	$this->enabled = "yes"; // This can be added as an setting but for this example its forced enabled
// 	$this->title = "Techiepress DHL Shipping"; // This can be added as an setting but for this example its forced.
// 	$this->init();
//   }
  
// public function init() {
// 	// Load the settings API
// 	$this->init_form_fields(); // This is part of the settings API. Override the method to add your own settings
// 	$this->init_settings(); // This is part of the settings API. Loads settings you previously init.
//  			// Save settings in admin if you have any defined 
// 	add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
// }

//   public function calculate_shipping( $package = [] ) {
 
//   $rate = array(
//   'label' => $this->title,
//   'cost' => '99.99',
//   'calc_tax' => 'per_item'
//   );
// 	// Register the rate
//   $this->add_rate( $rate );
 
//   }
 
//   }
//   }
//  }
 
//  add_filter( 'woocommerce_shipping_methods', 'add_techiepress_dhl_method');
 
//  function add_techiepress_dhl_method( $methods ) {
//   $methods['techipress_dhl_shipping'] = 'WC_TECHIEPRESS_DHL_SHIPPING';
//   return $methods;
//  }








if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

	function your_shipping_method_init() {
		if ( ! class_exists( 'WC_Your_Shipping_Method' ) ) {
			class WC_Your_Shipping_Method extends WC_Shipping_Method {
				/**
				 * Constructor for your shipping class
				 *
				 * @access public
				 * @return void
				 */
				public function __construct() {
					$this->id                 = 'your_shipping_method'; // Id for your shipping method. Should be uunique.
					$this->method_title       = __( 'Your Shipping Method' );  // Title shown in admin
					$this->method_description = __( 'Description of your shipping method' ); // Description shown in admin

					$this->enabled            = "yes"; // This can be added as an setting but for this example its forced enabled
					$this->title              = "My Shipping Method"; // This can be added as an setting but for this example its forced.
                    
                    $this->init_form_fields();

					$this->init();
				}

				/**
				 * Init your settings
				 *
				 * @access public
				 * @return void
				 */
				public function init() {
					// Load the settings API
					$this->init_form_fields(); // This is part of the settings API. Override the method to add your own settings
					$this->init_settings(); // This is part of the settings API. Loads settings you previously init.

					// Save settings in admin if you have any defined
					add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
				}

				/**
				 * calculate_shipping function.
				 *
				 * @access public
				 * @param array $package
				 * @return void
				 */
				public function calculate_shipping( $package = array() ) {
					$rate = array(
						'label' => $this->title,
						'cost' => '99.00',
						'calc_tax' => 'per_item'
					);

					// Register the rate
					$this->add_rate( $rate );
				}
                /**
                 * Initialise Gateway Settings Form Fields
                 */

				//  public function init_form_fields()  {
				// 	$this->form_fields = array(
				// 		'enabled' => array(
				// 			'title' => 'Enable',
				// 			'drone-delivery',
				// 			'type' => 'checkbox',
				// 			'label' => 'Enable this shipping method',
				// 			'default' => 'yes'
				// 		),
				// 		'price' => array(
				// 			'title' => __('Shipping Price', 'drone-delivery'),
				// 			'type' => 'hejheh',
				// 			'description' => __('Set the shipping price for drone delivery.', 'drone-delivery'),
				// 			'default' => '',
				// 			'desc_tip' => true,
				// 		),
				// 		'weight' => array(
				// 			'title' => __('vikt (kg)', 'cloudways'),
				// 			'type' => 'number',
				// 			'default' => 50
				// 		),
				// 		'distance_cost' => array(
				// 			'title' => __('Distance Cost', 'drone-delivery'),
				// 			'type' => 'text',
				// 			'description' => __('Additional cost per distance unit.', 'drone-delivery'),
				// 			'default' => '1.00',
				// 			'desc_tip' => true,
				// 		),
				//  	);
				// }

                public function init_form_fields() {
                    $this->form_fields = array(
                    'title' => array(
                        'title' => __( 'Title', 'woocommerce' ),
                        'type' => 'text',
                        'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce' ),
                        'default' => __( 'PayPal', 'woocommerce' )
                        ),
                    'description' => array(
                        'title' => __( 'Description', 'woocommerce' ),
                        'type' => 'textarea',
                        'description' => __( 'This controls the description which the user sees during checkout.', 'woocommerce' ),
                        'default' => __("Pay via PayPal; you can pay with your credit card if you don't have a PayPal account", 'woocommerce')
                        )
                    );
                } // End init_form_fields() ======================AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
			}
		}
	}

	add_action( 'woocommerce_shipping_init', 'your_shipping_method_init' );

	function add_your_shipping_method( $methods ) {
		$methods['your_shipping_method'] = 'WC_Your_Shipping_Method';
		return $methods;
	}

	add_filter( 'woocommerce_shipping_methods', 'add_your_shipping_method' );
}