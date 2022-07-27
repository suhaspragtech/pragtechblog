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
define( 'DB_NAME', 'astra_db' );

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
define( 'AUTH_KEY',         ' )eE6YN?5c{KQr) C~;a},|&NIc[L>XJ@`L1 Z>k:^IrVJCVj+0_|fdd^8C2oNS6' );
define( 'SECURE_AUTH_KEY',  'j~dGgkYb(I`ADVojozi|Kp)T|>tcYsMusw=ph2oP&,)_PxdTUnThEt9KKNa#XP,y' );
define( 'LOGGED_IN_KEY',    '*@@7{ ft$!15M=<X~qG@sdVRE3vCwdBd6Mm]nj/S<51)~`mCqq~Ue_p[7EjZ*K[:' );
define( 'NONCE_KEY',        'X$*6!sosbVTa+LoVZKdyc=zx~5;#-*p[]BslQC4mI8l)OP-tPYjP<?6`tJT_g&_S' );
define( 'AUTH_SALT',        '1rKiM~4z-Jy@T`LU]ZXY~t*|JAf$+ThW<v{;lxfe7Nxf$u%XA#zD5P0B/K9RY1af' );
define( 'SECURE_AUTH_SALT', '@}RdT8St(lpW.OK!z-,mOH-,?o~QNzje>mQeGCuNiGs<u]HMRX3j)wQ4@M$K<_PK' );
define( 'LOGGED_IN_SALT',   'R61GR= Jf6Rc;I;_9u~Vu(>ukW.U|Kq^}hXC*]OwL9`s}|;xBf#nu R8vSmrB3 p' );
define( 'NONCE_SALT',       'uF!JfAWqprzHT-<J_ix<05>|_&rLuxo9,5#GSg!$e*>ssz5y_fxxMKB))=]Bz[oH' );

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
