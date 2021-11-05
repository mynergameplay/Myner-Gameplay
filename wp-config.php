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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '/.=a;Atrbo9P5<^1P~IK+FAdV}9%iJ%L*Jd=;0Ay^1<]Rx{9}#}jjZBHG[ro|cry' );
define( 'SECURE_AUTH_KEY',  '[/DXO^<<enKu5%,?:e8@K*ENC/XM+mXi,(q<[a;JRvfbeH^T@iCmBdSjX7GNB_QG' );
define( 'LOGGED_IN_KEY',    '@f5sH4PnZWiP5-?l!cQh-v:_2E(k.wF2&vrIWOA5$|hlooWgCf*WPdoJA*[7x|>E' );
define( 'NONCE_KEY',        '={GCNHf|!#6$|J,H&N,Gh3Yj>P^b|{U=-a Zbi.B!R#D/QGt7$erbPV.s;M.uYQD' );
define( 'AUTH_SALT',        'MvDLH*FEI!:QBPcSdU=b@]*$`d]M>;!qptP?Ep;+q%gMIx7-.FEw(::d3D(LEr{(' );
define( 'SECURE_AUTH_SALT', ')5@Ns*0:%}V~H^ZA0Aei@@W LHzG4U,/H8#`KA6;eE0DJ+p9W:YCI=//RS)ztu#2' );
define( 'LOGGED_IN_SALT',   '@P[O~L9_+,c~ljwgj&v-g|eO5-&#%kQdgmH>0W$1#ohtAP]YLpA/u2kOUx]Dq`aC' );
define( 'NONCE_SALT',       'nWw)fxjj tsb2ZN9k*sekWt{hgm.$);M[:a`z@4L8Z?6ze<jqt,:AFsV0hghQ<Ah' );

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
