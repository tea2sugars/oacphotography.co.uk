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
define('DB_NAME', 'oacphotography');

/** MySQL database username */
define('DB_USER', 'oacphoto');

/** MySQL database password */
define('DB_PASSWORD', 'shd87h37');

/** MySQL hostname */
define('DB_HOST', '109.239.85.74:8306');

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
define('AUTH_KEY',         '+$w.<|++ Ok,F$a/=))6cD`7m6?EnRmzn:LQ+/$;)|}DRyt+<W2?tpg_||?y}V53');
define('SECURE_AUTH_KEY',  '-FP5J>;$)z@~WJbnCl<-!8~Y|y]au&I%rV=UCpIsKh~]2a2.2^_k;fbdq_WogQ83');
define('LOGGED_IN_KEY',    'b+H:X*w9~6B8bYB0R[UGO7V7a>H|/t!G4+c,T!DD*-=o *=-Nm}*y=AaJJ&/ri!u');
define('NONCE_KEY',        '`IWqgLqnN?%.8L-[<PJ&v~>-uDy.gY5m^--ghgp|-UokjAx|T-`6*qbkF~3sMny-');
define('AUTH_SALT',        'aY,8e`|._>lQJ5Bqccn$f:&X9SyG7A3u.PaH}|gMs*U,E)&S0LiqRq;v]s[9rZTX');
define('SECURE_AUTH_SALT', 'a-]uha~kI#GPscjn]5@fX+ -nK;%~!1S!|`HxSTvKi.m0)?|2]!F{Q}02xkKM^H#');
define('LOGGED_IN_SALT',   'kT.$q,q&&hvaB%Nh0?J%:yU[|[dF+2h;+M#sFyN/eWKgi2h3<-=HUd5WyiGHT:fW');
define('NONCE_SALT',       'sN/Ow=-DO<}VBtVnpdCK|zFaG!jKU)2+ :nNu?1m;E--+Z<dK 88MA}wy>6P&L-w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_photo_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
