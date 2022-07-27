<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'parallelcomputing_exam' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L1eroGZECJJY?s^V<H5<L3B[DoaLnv3/%>vv^V4dD{.8Uz)QyAA4]@{-$jz4{ROy' );
define( 'SECURE_AUTH_KEY',  '?[`V[GTQ$lXBtL.&LUv)7U;)MuLX&)B0%CN|kQgh@W3Sd*,s9s^6kqnj2ly[sOA?' );
define( 'LOGGED_IN_KEY',    '~ev1J(^3E3;|(Gv]#R7>9I.oBG~t|+l#:+p.})3p:(?JQTg]w>f/lyIMgw; ^LXj' );
define( 'NONCE_KEY',        'ib>GX+VUj3Qm6={KH]4&1Hs;jgfu*eTD^(8>T:#ZdQ.ts|e$yU?UZ6|iO:W)h*{y' );
define( 'AUTH_SALT',        '5tA5Lu^Lzn.5!z!-u?t? {BpS^Eycvn!|^L+a-(in 16<MrD [Cw%=O:]QC[vO8Q' );
define( 'SECURE_AUTH_SALT', ':V)`g[+Opr12(^/#IV7a2l{hH(Tbyl6kyY>7C[-~Enk]8o!/lLMeYy:-4-u 3mzw' );
define( 'LOGGED_IN_SALT',   'KunZ8!5Z-c_;)>98oyG}Xzx}x_3+lXLqdod-~2,RKyuQ&ybrPdzYRu^^Zw*,j ,Y' );
define( 'NONCE_SALT',       '(yj79j{eAckbO||C$b$}h1+ /gb^Nx-gkrqa5u[6z4ys.!zU[.7n}.]>jQ::0(/S' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
