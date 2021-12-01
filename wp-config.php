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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'tKleLs:do)ex2%Hh1;pV52 t6`Z$:yKVV=Rec(qM>V(189&KpAb({IlsPNoX9o6<' );
define( 'SECURE_AUTH_KEY',  '{[+{k<~WVV!DjGlVp50!~ozR>d&D&n9M`u8$xtI-hz{4`KywZ&I @I;XCGtET3%w' );
define( 'LOGGED_IN_KEY',    '_WzrhWmJ]kF{+Nv7<_A[!5bme9ly1b^&?Yn$P{%CIBG-Dcwa2OHLJfsFGih_6bJj' );
define( 'NONCE_KEY',        ']RBXS|w$vYiD>_g_26lFGNGn*^QXWd~I#V*$no8I 2QB&<xQIHp6H+ 1d7?JMS(Q' );
define( 'AUTH_SALT',        '7^5(5)w:#:^P?^3S|?WN.,-NYAICUUzWTOzSbgkTRqG|D<5`75+ykaJ73a 9g4we' );
define( 'SECURE_AUTH_SALT', 'h0#m.2r;<{8PfJnevqVre36]>V5d!@v&bVz>hL7B~{Yo4$NJ(3Nt=C^^JHqpj.5l' );
define( 'LOGGED_IN_SALT',   '%@VKuEV,m+uY6t(-v~*![8sb3LUhq,nFtSA6^@B%58noQ6l<ea&!.*Ct1L>^1?(v' );
define( 'NONCE_SALT',       '9*tlsZ<Cf<1N{_iy(=ylgB_~eA5YZ5WM@b}`m1d/C#,2#r|aq>4,ZgH-Xlx$Mwo8' );

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
