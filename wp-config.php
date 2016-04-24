<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'business');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'rX(86UG16) ofS[XAPg:x}neIlV*]SkSPx!f%nP!Fx+[I@iQBG.9<mZ#H6h|4,,?');
define('SECURE_AUTH_KEY',  'Qj$(]g#(4mrJGZpZRB4|{Xm];+j`mj3I%), 5K75#fsT^dhDLhz2_~1Bw#yp_!ml');
define('LOGGED_IN_KEY',    'Bu/.B*SzO[KT<{R,nU;+$jk%EWlWP< )SL_l8rTjY u*=^>h`hIEiM$JK2%d~S?M');
define('NONCE_KEY',        'f#o)O<S=n?q32H{.?/dfXiXzZ9}4kwwod3o541JqI6#/^!f9YS<%F4:aKY%{>cLh');
define('AUTH_SALT',        'ak:pD^#~UhpVaNf9Q$Xx5FTA:P!K!)Ef&.>B]h]W7#$s6QLPo,G}uNgo_qmBl-7>');
define('SECURE_AUTH_SALT', 'sy,p+x%oG{DrhWrQ41#BcbICt1`c:Zh4c*dNhOC:zFxm69vlM.-O8|p2riqC#Sov');
define('LOGGED_IN_SALT',   'TTz1)?986{~Dx!0bSGfPsf&+pl&h#;uk75zM6^Kp@C#!/z{*[=l&Fg,K{w$LEW/R');
define('NONCE_SALT',       '}d:M%i3VAv5-3`8k&(:R]I<VD;l#|hNW{[cVcM:!V1E,r*)&kat~@NTk:uWvNq%5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
