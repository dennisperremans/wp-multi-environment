<?php
/**
 * Production environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment 
 * in this file.
 * 
 * @package    Multi-Environment Config
 * @version    1.0.0
 * @author     Perremans  <perremans.be>
 */
  

// ** MySQL settings - You can get this info from your web host ** //
/** MySQL hostname */
define('DB_HOST', 'productionhosthere');

/** The name of the database for WordPress */
define('DB_NAME', 'productiondatabasehere');

/** MySQL database username */
define('DB_USER', 'productionusernamehere');

/** MySQL database password */
define('DB_PASSWORD', 'productionpasswordhere');

/** MySQL database password - set in wp-config.local.php */

/**
 * For developers: WordPress debugging mode.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);


// Recommended WP config settings, uncomment to use these

/**
 * Disable theme/plugin upload.
 */
//define( 'DISALLOW_FILE_MODS', true );