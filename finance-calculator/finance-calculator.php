<?php
/**
 * Plugin Name
 *
 * @package           FinanceCalculator
 * @author            Samuel Huth
 * @copyright         2021 Samuel Huth
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Finance Calculator
 * Plugin URI:        https://github.com/SamuelHuth/finance-calculator
 * Description:       A simple plugin that will calculate loan totals, and stamp duty. Will have functionality to send emails of form submits, and save data to the database
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Samuel Huth
 * Author URI:        https://github.com/SamuelHuth
 * Text Domain:       finance-calculator
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) || exit;


// ============= START HERE =============
// Ready? Go!
// 

// Define variable paths for the plugin
define('FINANCE_CALCULATOR_LOCATION', dirname(__FILE__));
define('FINANCE_CALCULATOR_LOCATION_URL', plugins_url(__FILE__));



// Define Shortcode
add_shortcode('financecalculator', 'initCalculator');


// Initialise the Calculator
function initCalculator(){

    // Disbale the admin bar
    add_filter('show_admin_bar', '__return_false');


    // ADD STYLES AND SCRIPTS
    wp_enqueue_style('finance-calculator', plugins_url("/css/styles.css", __FILE__));
    wp_enqueue_script('finance-calculator', plugins_url("/js/scripts.js", __FILE__));

    
    // Include the functions.php file
    require_once('functions.php');

    // Display the Calculator
    require_once('templates/calculator.php');

    return $financialCalculatorOutput;
}













//  ACTIVE PLUGIN
register_activation_hook( __FILE__, 'financecalc_activation_function' );

function financecalc_activation_function(){
    // CODE FOR PLUGIN ACTIVATION
    //
    // Start up a DB
    //
    //



}

// DEACTIVATE PLUGIN
register_deactivation_hook( __FILE__, 'financecalc_dectivation_function' );

function financecalc_deactivation_function(){
    // CODE FOR PLUGIN DEACTIVATION

    // Do something??


}