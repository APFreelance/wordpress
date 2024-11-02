<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sorteosredes' );

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
define( 'AUTH_KEY',         'Rfl6B`dU6NjfIK%Pp]UQL#j1AokkHpQ7/R4/1BchSYqH@ML5s.l#sC#)m]eNJx^Y' );
define( 'SECURE_AUTH_KEY',  '(RxyNG=sZ%;4LxZNQal)+O=W*fh{|[0&$7~p6D}f@7`n+uZ;_A`AxgjZOlhoAEaX' );
define( 'LOGGED_IN_KEY',    '5<f%E}owXH{gER%1A$@OfiEtG=e<Bjo%z$ml!Ojk|i1cHyW4} H%Ed=hs*383@Ah' );
define( 'NONCE_KEY',        '+sS2Ku^&XnD;f7ph.EV)cB2Y1`3Ouy^p?79JCw]Fef+e!MwHI_fNms3_`t~~7d`)' );
define( 'AUTH_SALT',        '/dw!0x#ox<`FUx<Ai@i_Fo#d%`K}N35r3UA5%}dxHYW=kOY^[7yW+^C)+=7`G-l3' );
define( 'SECURE_AUTH_SALT', 'eJ%^kps5jX_+Me]m`5{|^J6HD3HdET$C)925S/3778TKsTMU>4~kylMX@#a1Jm9b' );
define( 'LOGGED_IN_SALT',   '3Ef!B>W]5+vZh;$(;<JV1z%!~nmw;`>jZt]490Opy!rXZ6M6[G7{j`$Jdl:U@sb@' );
define( 'NONCE_SALT',       'L*>92S yGzSA||W9yz#*H3[6zaj8Z=REu:cui)Hw?JF{[YL.-J.pNmNpMKm3&]8B' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
