<?php if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Plugin Name: NF Utility - Force Form Conversion Complete
 * Plugin URI: http://kylebjohnson.me
 * Description: Manually sets the form conversion flags.
 * Version: 0.1.0
 * Author: Kyle B. Johnson
 */

add_action( 'admin_init', 'kbj_nf_force_form_conversion_complete' );
function kbj_nf_force_form_conversion_complete(){

    // Manually set flags from the Form Conversion Upgrade
    update_option( 'nf_convert_forms_complete', TRUE );
    update_option( 'nf_converted_form_reset', FALSE );

    // Self Deactivate
    deactivate_plugins( plugin_basename( __FILE__ ) );
}
