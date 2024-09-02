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
define( 'DB_NAME', 'asadullah_db' );

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
define( 'AUTH_KEY',         '=JUJ*X_<m:B=:~K^!j$4,oOE?tCaG2hF89p]UC^,3/Dqp*Xz+{v8QnWp$)/Wy#]K' );
define( 'SECURE_AUTH_KEY',  '05RZ?37_H7(U*XI+i:2+ fj?&en9lp.-WiMO.DS{O{K6|fzZwc14qwI~B3*XW]Au' );
define( 'LOGGED_IN_KEY',    '0aiA>DmaNh(W),6(9S?Q8V)NElI8X@{@kI@oT[<!XZuvjV(Y-K2N@^/K8W6|73xe' );
define( 'NONCE_KEY',        ']*nS+R(b-rvRt8Y:*v&QnK%fwu%bzTC!@M+[zuw5XN@,Zb@Yok6y3jPqIFmo[V.v' );
define( 'AUTH_SALT',        '~b:Dpzs^u:/w3_uv,2x!l$2g9W;..CLDx>{3.=u{i@CBx=/H*xtkE&=</q4-_N9v' );
define( 'SECURE_AUTH_SALT', '9FE0@_CV TUhJ5/8bmmY2;/AhE_#mukjha}#ziwfU_KfDpu d;VWP|@L^0&nfk}3' );
define( 'LOGGED_IN_SALT',   'K)D^iG=kJ}RMh6cBo.taYjMYWmz?mnQMzFDd>,D}HH!{P+Rn+c(Ft4l5i6Wlo+dv' );
define( 'NONCE_SALT',       'vEK|nO!dTfk(egCFuWT?QaH$Rz>/gZQ,j}6bW?Nf3oP.c3I69h!M4g>7cEmF_|QW' );

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
