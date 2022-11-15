<?php
/**
 * Development environment config settings
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
define('DB_HOST', 'localhosthere');

/** The name of the database for WordPress */
define('DB_NAME', 'localdatabasehere');

/** MySQL database username */
define('DB_USER', 'localusernamehere');

/** MySQL database password */
define('DB_PASSWORD', 'localpasswordhere');

/** MySQL database password - set in wp-config.local.php */

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

