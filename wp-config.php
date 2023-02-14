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
define( 'DB_NAME', 'galleri-ae' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@<O.?{/<C=5nvrD}SY<T{hOh{{4=^Ns$N=IjmJ32ml/)w;;b!F*G&5{Z|rlPX|1<' );
define( 'SECURE_AUTH_KEY',  'BWsq!i(ya1y{IWn5rfP-q+fgU$(h?%&D!7<S6?8#DN@|_:#:J)M9^TA-*4ak/2,S' );
define( 'LOGGED_IN_KEY',    'e9;[:uUfzia+I0s6vW9y7bQsnA5[R?ne(3AsW|v7,g=%f`+mYv$/yM ?|*+3Qnu@' );
define( 'NONCE_KEY',        'v@9se8G 1XL81%Y<8i_^8sFzZoHY)9~UaU._Yd;<cE7B(O!dHx*&E[c3#-#([Y6.' );
define( 'AUTH_SALT',        '/:b5(%^@ls0P$8~GClI^oXX0B -{B{?=;_L~KYhgc&ZU[wjW]q8rj<}>ly81q*b9' );
define( 'SECURE_AUTH_SALT', '8_j;^.yLIrwja3s/,Dkfz]]=`Y`0~$Q9fqy?t,E|DiLSl^TutMn] /TG4nWGUuhZ' );
define( 'LOGGED_IN_SALT',   'J.#Sa!B1D%zlg^D#$A3aB$M;mU,a9GO4VVRj#geOdL]tF #T<7-,:6O933Hd{&x:' );
define( 'NONCE_SALT',       '<rb$f-(UQ:,)MNh-7%4eaw,NJ<M0#z.aA:(u<&!kx{n*?I<v`=@b<M7%yLpnH m+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_galleri';

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
