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
define( 'DB_NAME', 'rym_db' );

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
define( 'AUTH_KEY',         'xb..`o+BM},;&dkW?t/^#un>~08L%CKu:2G-m5x9rkb{=eGe.12wU0-;ks0y%.Oj' );
define( 'SECURE_AUTH_KEY',  'pAaTpkO:FOIbfx%iI#Sm8N0LbPj>Caj|Kz8WD(Y}u:@x~)39*EmM{aoOvT:po3_=' );
define( 'LOGGED_IN_KEY',    ';^M~eJt%$MG#%G >K-wE-i3c/-P%.x2*/:e{}S]@[+z:&!034`AiOsSGD/I}O2,y' );
define( 'NONCE_KEY',        '%a5B`FKTA<:{ sWCan.q1pp;,UHA=nCxDet9}^n KWR+b-<sbplwZ IAO#-oR5n.' );
define( 'AUTH_SALT',        'pQNuNd{hcG^ndK,^3ltymI&x?XpYedBybVV@)KIn0I0n7@R&mKaHNZ7JKx/ceta/' );
define( 'SECURE_AUTH_SALT', 'rf9 ]w<(^~FE(ek7#/}){5@R[BK36Uw>4u(Um&x}Bx|LEoW<GhE1IZN68^OYtGH)' );
define( 'LOGGED_IN_SALT',   'BhH}G-Bp8y2gkotz[ @lB3?y_3+&(% /H#$N*4}Qkl}Iw(}_YTwB`tcFU.H+LlgG' );
define( 'NONCE_SALT',       '4E+J1P/Ua185axrRAy>3n${xjT1!q-3dIXG>AwY[ kT>>#qTktjU=XtPxo],^XKo' );

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
