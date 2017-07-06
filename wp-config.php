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
define('DB_NAME', 'wp_create_theme');

/** MySQL database username */
define('DB_USER', 'wpcreatetheme');

/** MySQL database password */
define('DB_PASSWORD', 'asd123');

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
define('AUTH_KEY',         'Mv}7c7[<TcLWi@W0,2ol~gbMkrj~SX{-#Wjc-[aD0h~mm:v}uV<YzQ;~klYh+J#@');
define('SECURE_AUTH_KEY',  'TJN-UO;7DRR9#o]8)VlkCjT`_E^WF7e+6)H![TE9K `g0-&4KXZ]y;d`:s489 O1');
define('LOGGED_IN_KEY',    'UW]hr$nh*q3Eje9-qu8x>KL6JLge.EWkl66Xn>)(-_.T$fB=QK4{3`y7Q/]i^,=~');
define('NONCE_KEY',        '[;2|?BvK7IfJ/>/b)|||WgN2}Sz8v|>nJ;9HjMN{dM<!k*3#`us$%sW: xQc/-wI');
define('AUTH_SALT',        'Epe65p5gA^;: Oj_.X`},y<&anr?VY<#Rk[xaxQLm1t1G|CXY_?g_&G_e.HA^wta');
define('SECURE_AUTH_SALT', '=3?A>]6w.)oKR;aru:hV@B4d88NwU*%r+(`r276trq+.V}Wn*xPeb}2^#.Z,TIi|');
define('LOGGED_IN_SALT',   'P7Uf@ZU4z4Ua:{Rw`7hV.uE8._g{O)cxsI[DA3|:n<p0}j<dS<_C0ZHOF$Da|{ma');
define('NONCE_SALT',       ']mk,*ljebnf`$,e>|8cZwkXcNoP=w&hD#)fay:n`p:{.C[?g3R_P]LXTwwJ?~aWU');

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

