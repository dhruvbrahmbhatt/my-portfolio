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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'l_g%QS&Zpr<L{VN5crXOk=_nmANOjdQ{y?~!|5|s>j5fB rvW-|6j)}fP)N+W=Yl' );
define( 'SECURE_AUTH_KEY',   'tcq~VGRbC1[rusMlrD9A_AY&(pxiNk&2pUJ|~}3!z9tx}rxV5a]x{0x!3w#W(e3t' );
define( 'LOGGED_IN_KEY',     'S^Srv-ns7bI2<}%H]NSNJ0C9JZAIc1@@T9(q,{%~6Dj<^SjR??m[4g,78Xy>9`WP' );
define( 'NONCE_KEY',         '5sz$F!84k{6-Wk41K3rR;re2xaC#&&p1ccPnmUt0df<(r`/@z/]F3yb@Z_*,)kIc' );
define( 'AUTH_SALT',         '2m.%j&NH#q%O&ag/yi;uf9BpX8v]eRe>0@t$dbFYI3Iy6db`1wwKI1ym/PT4:+*:' );
define( 'SECURE_AUTH_SALT',  'M@f0{}]R3>$UOG=`P,ujRZK|:npao_7WCq[(1+$%T#&]>zW;[)n40Ht L.ZZTn|&' );
define( 'LOGGED_IN_SALT',    '0+[U<|M=!<fx=%@x$rEIDn]=&~-Rq8M2BQm5@S6?j5UMH]!hPxK:v>flh!4~TSk(' );
define( 'NONCE_SALT',        'I2VWGC`]pe2l;P iCZnx,A_)]$$Q78!7%!l~d[eBKhN/Gb-}y$-o-xkFx(ev)^bI' );
define( 'WP_CACHE_KEY_SALT', 'B^0$Ay80{K~Ffk%/f>5VZqGX#FC*;[2`~KT*[|j:RNW.Pb%O:;#yMu>dXR,[[.bF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
