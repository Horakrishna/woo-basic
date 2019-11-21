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
define( 'DB_NAME', 'woo_com' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7EO>-7{U.,H4A)]YXKYDe7V5c(|7?SGv{fmJR3zd.f^02G!flo|zD>N|i@qQ?fky' );
define( 'SECURE_AUTH_KEY',  'Os`vxEHmT0f4t88]} u_xB>h&#/n(,H_fn).pn>7L+oUyH* }}{X F?>9&a=%r[9' );
define( 'LOGGED_IN_KEY',    'Ml~WPr1NHQCQ1`|B^VR5fTY{^oPWje|d+]~<MO88o|o-48*`YbG:;){^E~s~LTI;' );
define( 'NONCE_KEY',        'f CX4Bx]r]EC+GFGlx.vJ!wI5O8XYK,2V:xRY+:UXY7t-,*A_m= S{ RUbe4ukMy' );
define( 'AUTH_SALT',        'f7+G_5G+PsOf3VdyW,S+f*GmLmVSjiK&%|M=g!?rdUO7$$.8T0gs-dsM/QRlo`N_' );
define( 'SECURE_AUTH_SALT', 'xLswvW>Mo##xKHCCp^#.Kj?4uB63Ce@u2AJj%#:,gGmxHSH; W0i@DGt!|-_HZqV' );
define( 'LOGGED_IN_SALT',   'jS5u#l9xc`>K[}BYG4)nz`*QLdzVooH]OR2O=X]5~$Ba;GPhtyxnrEM-V$kM]l=.' );
define( 'NONCE_SALT',       'Bv+}/h=?,.v[OttMy{K~ l[mM^:CzxJ[A}ZtkO^t:Ch|n>^>Qpe/bf}<7P`OA7Ls' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_woo_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
