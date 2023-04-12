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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         't{7l9Nt}_KTs9ydm97tWJY7nAENPf7~-ndXy+RTc@o!8ZC%Kke])~HR9B+5f{K2U' );
define( 'SECURE_AUTH_KEY',  '9],/He 9aA){Yn3~-Mvr:u~2X5t.CmJ?~)LOb`!^Ls[*!W{<GA8JVR@UpwsK-|m[' );
define( 'LOGGED_IN_KEY',    'QNM$_lPw&7t+]0GD-)]N(9_sr)Tx%|bZ|6zQX&oU3B7v%*wLLTE!l:(&]%6ue5[[' );
define( 'NONCE_KEY',        'XJ .CQb(byPyp~O1:P<w0BM|EAY)u7+M^&pQ+MaS)2{l_|S$G@yQzPt]JL@2p+0G' );
define( 'AUTH_SALT',        'N!%MhS6)LE/RX)%rJ`YuUuo4=Vrm<+R/=M!pQ1 DXp:krt4STA2@G+6Z@zsW+vp#' );
define( 'SECURE_AUTH_SALT', '44xjhIyVOxX%smoc5@ehSQxMLd}S*,;@Yu~,cK&p`G:+3`kW<?{PP*#+$xNu`4Zn' );
define( 'LOGGED_IN_SALT',   'PlKH,{F2V>D!l|8 ~AS.q~qOR&U-%L.NDg~s_tBu$iHGU7*:O{^je.Q,t6Q8zNaU' );
define( 'NONCE_SALT',       '3~z,0jAMt.j7uY{ko}H9bEH,T%yX u1%:7>nOWVseT{1QFp9HRV.qhJLXFQaM^7a' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
