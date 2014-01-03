<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/mnt/stor10-wc1-ord1/831519/871048/makewayfordux.lukehatfield.us/web/content/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', '871048_dux');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'M87S9jr10!@');

/** MySQL hostname */
define('DB_HOST', 'dux');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'nZzyfA/J9EbuIJhSI)-oxHZFD69391}x2w6*7Xp&0A8I)p|p7)OFob_2*;s,"pmW');
define('SECURE_AUTH_KEY',  'W.CqN24O0d[)D"7K$W?0903N3;DXi1i%QU32k7QklL2YG97h6[iB6->w$r/",99F');
define('LOGGED_IN_KEY',    '5@I>)}73J92>j95>5npy6d5-EV%t6L0ykgl2ds5WC8JWEOK7#0F)+72p4ETw>r58');
define('NONCE_KEY',        'H?aUggeT<YeqaYx+w#5h-uHL9](VpL47z%pQ;E8&0n5b_C{fd2x{:%I2$ok0!+88');
define('AUTH_SALT',        'Z[ZSz9wz:CK%%H;.6p>|2v1^U_&s8MBuH]=*7heZTZCw4unbUabXG#A]Vfrq23V7');
define('SECURE_AUTH_SALT', 'W.CqN24O0d[)D"7K$W?0903N3;DXi1i%QU32k7QklL2YG97h6[iB6->w$r/",99F');
define('LOGGED_IN_SALT',   'oy>eCa7#_,0s.?V-_cC:.gylG76$4/SsqGH4RbDA1b4;0m#_yd^ptcK!(dL=52dw');
define('NONCE_SALT',       'IV}}7By9M|2MlCwUPa-(mtR3H1>M31)MW&Krf(}3*Zd1|JWOUEv&8+)c<8Z.0GCt');

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

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_CONTENT_URL', '/wp-content');
define('DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST']);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
