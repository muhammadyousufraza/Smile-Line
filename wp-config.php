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
define( 'AUTH_KEY',          ';VICM@8>XTU,O[BVS(rr}j!<Y}2Lb4l`w<`2gd5PuS)!bX/ZAdW|Te82=uho;+@b' );
define( 'SECURE_AUTH_KEY',   'z}=zX<00K: o8|9p;|of$G%5S/n4]{tq7T8zDNZ_|vFzKt0A1pP [Jas1 wSxN_B' );
define( 'LOGGED_IN_KEY',     'ZCPO#gXANNklE.OLS Q@f-;0r5j]&JqWI{d[|M&_NKL7^i2i*!04YLCznurZD7y`' );
define( 'NONCE_KEY',         'HULP}S@_BpA`=XYyRtYRb&c{]NZCBK]B1GKO92]bff(q=K<ud:dD7b7iUo&R(+qf' );
define( 'AUTH_SALT',         '-eq<.%(l+7 )9>M|{:=:N..`K=csJj])rP1[moOv*lJr6aE9#Ciz,ZPec5@)Dm.]' );
define( 'SECURE_AUTH_SALT',  '$7=jP3i#~?0bGXXZ+vTV+NK 2!_(|nVh=ud]Rgb{g]o.R9^-0:R$gNwx/3V5aV@y' );
define( 'LOGGED_IN_SALT',    'S p~&k.X.r:t0/L1&Vux#2{7X)`/_mtAATs 1{X2Fm6!lHU?d{U`kXiuO7`>ofhu' );
define( 'NONCE_SALT',        '+Qly8#dWO@}9#s{F?t1GZICd7~RN_fI%4A_O)=H&}(a<S(U{2~R7Az8(2{Rt@[ly' );
define( 'WP_CACHE_KEY_SALT', 'qqvT6INl{G0!uXku*)HEB9Cl3GeqOoQ#UR),K-P|NicV@_mR/1![&Y_#rjfFc.%*' );


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
