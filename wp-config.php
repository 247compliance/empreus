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
define( 'DB_NAME', 'empreus' );

/** MySQL database username */
define( 'DB_USER', 'empreus' );

/** MySQL database password */
define( 'DB_PASSWORD', 'empreus@123' );

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
define( 'AUTH_KEY',         '` ARJn.8,?d0E`o-{1*L3j gt:~e iEor$>!7Yo!| H!H7D&+vT%HN}5PpN?HNGq' );
define( 'SECURE_AUTH_KEY',  '7ke#^x`p!&vJ``(s_!fwIDj;W%r?I381%;9qtHyD,u52 OZID=sJmYpSZ7u0yFUg' );
define( 'LOGGED_IN_KEY',    'Y44+PMu25&if:m]e`qGAg[o*a/f?cG%tr];n.(#pGD2fHpPbLRl6Ilz-y/rH1s,B' );
define( 'NONCE_KEY',        'hrR  w/otT_Q6X$7J7PI3xD~vop8yqxV4@2+POL&8|^mB[%5L+q[nU!}<Ha}Cd<j' );
define( 'AUTH_SALT',        '$MW}B!IM.q[p_G94h$/Gu)AtaTVE:u&XWp+Z ;w]`%3zNTIb*ghc^i/,$?Uj5%Y*' );
define( 'SECURE_AUTH_SALT', 'N|tU[[rmmV1U[-Ap=SF-kP`u<72dR61;NMEY+5M-.g>|Bs9dxiA!/&> &>x~Jmo?' );
define( 'LOGGED_IN_SALT',   ',mq h/vMTt^(]-nYLx1I9&YLl!xu3CQ O,J3z)tJgC9a?D jxuwjBXxB7Cg{0-^%' );
define( 'NONCE_SALT',       '*|&b)K_.#{mgLmhg+-G3+OV-_KfBY`REN^}aW]]O8]v}rYw X24e5~O`,pn|L:;D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
