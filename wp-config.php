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
define( 'DB_NAME', 'wamp-demo' );

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
define( 'AUTH_KEY',         '?uo7AoTj&HAIjYP5w3$R-iV/Brv]qd~v2MXvEhHH|nG+m>9<Y8.q#FR0lYL ~L]m' );
define( 'SECURE_AUTH_KEY',  'XG`No` nJI:xk]NiQ5>1OXAd  JAV2Im|!TJsu~%{9*^[eJvDElOwnt^*RgE%5Ip' );
define( 'LOGGED_IN_KEY',    ')UhH/::4;,?XzLdO> B^0ha,gq!;bqP5bAnhwntfqZEIu)U;D-&_(}w0:(L6~Xcz' );
define( 'NONCE_KEY',        'ZvfxT`tj}PCf>h##E}aTSq3B@vK9>pU%_)T$zmmL~^87-.gy4+?8vHD0Zm1jrZ? ' );
define( 'AUTH_SALT',        'di4+&%&:$k,6N)c$ 2Zt`UbA0ymaZ~Va!TfyE65XcGVg^ZzU!s[ @d%g7mo*k^-{' );
define( 'SECURE_AUTH_SALT', 'P:-<]BnqL8AE 5~m]`L1yX[C1939h&4<f%8:n7~Y+8{ 0@)}^fSsndJqA/BW|B:q' );
define( 'LOGGED_IN_SALT',   'nH#EDP%&S3*}.Q[VR )1AMVo]J0ij}S):C;#jVbSB-)oucsov.9_Dq|-SSoJS1fa' );
define( 'NONCE_SALT',       'G2h2T0DgY{l4a`Vt`i:c{g/k{$/@ah;{Dq|l5AV8:Qhb%]vx^#dkQ)s>QVE46E>$' );

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
