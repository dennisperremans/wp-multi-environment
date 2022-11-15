<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files so make sure these are only set once.
 * 
 * @package    Multi-Environment Config
 * @version    1.0.0
 * @author     Perremans  <perremans.be>
 */
  

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J>O4o@aDgCpT$36%<R%s6}va-|wq$mGM(C;tw3#<HBg/M5ENM|c85gDbBoNt<+-@');
define('SECURE_AUTH_KEY',  'pL,YSK2)&fFf->3;[XU4BuTmT<7H:^>mnUEl7rv-Gg[H{3at>;.$.j#^vkiuJks`');
define('LOGGED_IN_KEY',    '+|q;2,2)C=)T7-Mg+W>wf2+7IGYBU7%)k;RS6sGNWN3x@4{D.bgfMAjYEs^7jD3u');
define('NONCE_KEY',        'R2-YD[O3Zp4,85T,atm2NbPH7tAu<Md384=]>z3L_j}fT9&NM/|,BKwxq8r W+]s');
define('AUTH_SALT',        'cl/Y@RQ@+%S&|{zCfH3:-W&c,+r[rq6_Y!aBLSfMyq%Y>6LWsO2/.ob.ch&`,kuK');
define('SECURE_AUTH_SALT', 'Av>G:Ci%wnvC0L }iRWF4({ZXJG919MI)Q}$l>y4rxM3j;AmiIeRm(D~2OgU)#+*');
define('LOGGED_IN_SALT',   '@1-z-6Bo%y9_0A=bAV @lO@u%Y2VlhKP;?4o2!#EWyG-K+658RNGCkCUYl[TM5 h');
define('NONCE_SALT',       ':Q7 +AO%J_+U!|bu(PDuAk1{2VR<yI1Xwpkd1yp|D(f2Uv{!nnhzivH[fKT,e4:C');

/**#@-*/


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


// Recommended WP config settings, uncomment to use these

/**
 * Increase memory limit. 
 */
//define('WP_MEMORY_LIMIT', '64M');

/**
 * Limit post revisions.
 */
//define('WP_POST_REVISIONS', 5);

/**
 * Disable automatic updates.
 */
//define( 'AUTOMATIC_UPDATER_DISABLED', true );

/**
 * Disable file editor.
 */
//define( 'DISALLOW_FILE_EDIT', true );
