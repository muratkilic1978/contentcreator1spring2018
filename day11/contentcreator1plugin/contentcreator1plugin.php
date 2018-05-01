<?php
/**
* Plugin Name: Content Creator 1 plugin
* Plugin URI: http://www.nodomain.com
* Description: This plugin will create a simple HTML-form with 3 input fields and store the information into a stage table.
* Version: 1.0
* Author: Murat Kilic
* Author URI: http://www.nodomain.com
* License: GPLv3
**/

function insert_into_db() {
    # This ($wpdb) is a global variable inside WordPress that gives me access to create new tables inside WordPress
    global $wpdb;
    
    #Create a new table inside my existing wp-database if table not exists
    $table = $wpdb->prefix . "cc1testplugin";
    #Setting the charset for the database
    $charset_collate = $wpdb->get_charset_collate();
    # Creating table with SQL
    $sql = "CREATE TABLE IF NOT EXISTS $table (
    `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
    `stagename` TEXT NOT NULL,
    `capacity` MEDIUMINT NOT NULL,
    `url` TEXT NOT NULL,
    UNIQUE (`id`)
    ) $charset_collate;";
    
    #Including upgrade.php file
    require_once( ABSPATH . 'wp-admin/upgrade.php');
    
    #Useful for creating new tables and updating existing tables to a new structure.
    dbDelta ($sql);
    
    #Starts output buffering
    ob_start();
    
    ?>
      
    <!-- Here I will create my HTML_form with 3 input-fields  -->
    <form action="#v_form" method="post" id="v_form">
        <label for="stagename">
            <h3>Name of stage:</h3>
        </label>
        <input type="text" name="stagename" id="stagename">
        
        <label for="capacity">
            <h3>Max capacity of stage:</h3>
        </label>
        <input type="number" min="1000" max="50000" name="capacity" id="capacity">
        
        <label for="url">
            <h3>Type MAP location (url):</h3>
        </label>
        <input type="url" name="url" id="url">
        <input type="submit" value="submit" name="submit_form">
    </form>
    <!-- END HTML-form -->
      
    <?php
        #Gets the current buffer contents and delete current output buffer
        $html = ob_get_clean();
        # Check if the user has clicked on the submit button
        if (isset ($_POST["submit_form"])  ) {
            #Setting table prefix
            $table = $wpdb->prefix . "cc1testplugin";
            #Collecting data from input fields and store it in variables
            $stagename = strip_tags($_POST["stagename"], "");
            $capacity = strip_tags($_POST["capacity"], "");
            $url = $_POST["url"];
            
            #Inserting data from the HTML-form based on the variables into the table
            $wpdb->insert(
                $table,
                array(
                    'stagename' => $stagename,
                    'capacity' => $capacity,
                    'url' => $url
                )
            );
            #Writing out a message after having inserted the data from the HTML-Form
            $html = "<p>The stage with following name <strong>$stagename</strong> was successfully inserted! Thanks.</p>";
        }
    # Displays /outputs text on screen
    return $html;
}
    #Adding a wordpress shortcode that can be used on either a wordpress page or post
    add_shortcode('cc1testplugin','insert_into_db');    
    ?>
