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
define('DB_NAME', 'id4219227_smartcoffedb');

/** MySQL database username */
define('DB_USER', 'id4219227_administradorsc');

/** MySQL database password */
define('DB_PASSWORD', 'smart97?');

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
define('AUTH_KEY',         'F!-dHi>uy)KZT6-}d<(;-nFU<!I<942n_E@wC/Vi>SdxnGq3>1xga_7_H^;7[4-C');
define('SECURE_AUTH_KEY',  'I~}K^MQ)9ZBihS$|_i:sn,-VtJNv5Dt2gOt0<`C:yV#Z!Dv)GfX?~PXvLHeIb:=b');
define('LOGGED_IN_KEY',    '@,oPGq,+a0bh>;xdgHU#:XE-F;.KWy#@1!I3%)`dzySM4~~#Ziz{m#H|L|k|t1A}');
define('NONCE_KEY',        'K+aUhKr[ozLG4687jsnB3>|YeILz~POAf*i|j}2Zqs@v>vYR@11{KTV~(.8j*x~k');
define('AUTH_SALT',        'YC6aVC~/X-_+4_;&z{3EP)oy^3}-A-t=dB^hsg!>F]eXKuI=34o[_&z%;2[DqO0h');
define('SECURE_AUTH_SALT', 'E^5?f[3%)A,Zab Z(%#!~?S$1@CCHUa2[S+6]LPxayd~FMa/#tvswKW.tey:%SC-');
define('LOGGED_IN_SALT',   'zH7jwXJB.:CH ]GS2-E/c1eXn69)zN^o$H+8/X_tqMSjeN)`ivYB!1GNQ|G~,Q]!');
define('NONCE_SALT',       'fpU}D<g[_N@O&G2x@l:Zy(1n%<9%o@/16B#3bF}>0%Pc$E,#|zdRe[3g#{lo7/]Q');

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
