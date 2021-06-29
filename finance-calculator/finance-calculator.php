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

// LOOK AT ENQUIING STYLES

// Include the functions.php file
require_once('functions.php');


// Display the Calculator on Custom Event
add_action( 'the_content', 'initCalculator' );


// Initialise the Calculator
function initCalculator(){
    require_once('templates/calculator.php');
}













//  ACTIVE PLUGIN
register_activation_hook( __FILE__, 'financecalc_activation_function' );

function financecalc_activation_function(){
    // CODE FOR PLUGIN ACTIVATION




}

// DEACTIVATE PLUGIN
register_deactivation_hook( __FILE__, 'financecalc_dectivation_function' );

function financecalc_deactivation_function(){
    // CODE FOR PLUGIN DEACTIVATION




}