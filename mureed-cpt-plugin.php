<?php
/**
 * Plugin Name:       Mureed Custom Post Type Plugin
 * Plugin URI:        https://shumdesign.com/plugins/mureed-plugin/
 * Description:       Handle the basics with this plugin provided by Alicia St Rose.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Linda Shum
 * Author URI:        https://shumdesign.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mureed-plugin
 * Domain Path:       /languages
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Load text‐domain
add_action( 'plugins_loaded', 'sufi_k_load_textdomain' );
function sufi_k_load_textdomain() {
    load_plugin_textdomain(
        'mureed-plugin',
        false,
        dirname( plugin_basename( __FILE__ ) ) . '/languages'
    );
}

// Activation: register CPT & taxonomy and flush rules
register_activation_hook( __FILE__, 'sufi_k_activate' );
function sufi_k_activate() {
    sufi_k_create_cpt();
    sufi_k_create_taxonomy();
    flush_rewrite_rules();
}

// Deactivation: flush rules
register_deactivation_hook( __FILE__, 'sufi_k_deactivate' );
function sufi_k_deactivate() {
    flush_rewrite_rules();
}

// Register CPT
add_action( 'init', 'sufi_k_create_cpt' );
if ( ! function_exists( 'sufi_k_create_cpt' ) ) {
    function sufi_k_create_cpt() {
        $labels = [
            'name'               => __( 'Mureeds',             'mureed-plugin' ),
            'singular_name'      => __( 'Mureed',              'mureed-plugin' ),
            'add_new_item'       => __( 'Add New Mureed',      'mureed-plugin' ),
            'edit_item'          => __( 'Edit Mureed',         'mureed-plugin' ),
            'new_item_name'      => __( 'New Mureed Name',     'mureed-plugin' ),
            'view_item'          => __( 'View Mureed',         'mureed-plugin' ),
            'search_items'       => __( 'Search Mureeds',      'mureed-plugin' ),
            'not_found'          => __( 'No Mureeds found',    'mureed-plugin' ),
            'not_found_in_trash' => __( 'No Mureeds in trash','mureed-plugin' ),
            'menu_name'          => __( 'Mureeds',             'mureed-plugin' ),
        ];

        register_post_type( 'mureed', [
            'labels'         => $labels,
            'public'         => true,
            'has_archive'    => true,
            'show_in_rest'   => true,
            'rewrite'        => [ 'slug' => 'mureed', 'with_front' => false ],
            'menu_icon'      => 'dashicons-id',
            'supports'       => [ 'title','editor','thumbnail' ],
            'taxonomies'     => [ 'sufi_order' ],
        ] );
    }
}

// Register Taxonomy
add_action( 'init', 'sufi_k_create_taxonomy' );
if ( ! function_exists( 'sufi_k_create_taxonomy' ) ) {
    function sufi_k_create_taxonomy() {
        $labels = [
            'name'           => _x( 'Orders (Tariqa)', 'taxonomy general name',  'mureed-plugin' ),
            'singular_name'  => _x( 'Order',           'taxonomy singular name', 'mureed-plugin' ),
            'search_items'   => __( 'Search Orders',   'mureed-plugin' ),
            'all_items'      => __( 'All Orders',      'mureed-plugin' ),
            'parent_item'    => __( 'Parent Order',    'mureed-plugin' ),
            'edit_item'      => __( 'Edit Order',      'mureed-plugin' ),
            'add_new_item'   => __( 'Add New Order',   'mureed-plugin' ),
            'new_item_name'  => __( 'New Order Name',  'mureed-plugin' ),
            'menu_name'      => __( 'Orders',          'mureed-plugin' ),
        ];

        register_taxonomy( 'sufi_order', 'mureed', [
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'rewrite'           => [ 'slug' => 'order', 'with_front' => false ],
        ] );
    }
}
