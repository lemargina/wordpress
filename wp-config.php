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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'greencard81' );

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
define( 'AUTH_KEY',         '+Nw|iTtpwqX*E[0Z%%AUMK!UrwhGsR~XUOu!l+kRJ6Ti!XGs^FMXoQAN?h@:8%nR' );
define( 'SECURE_AUTH_KEY',  '$$,`;jMWGd2MRqW&>g.MXAXE.ukF=hFV@YF%,4 ?cwT?uJo5jkPf&+yP=6qG1.l&' );
define( 'LOGGED_IN_KEY',    'cEJ7vZxK}x>;Ob-Eo)s|}k8cR!t%9tcVG2etTh|xI#W.,Jk+$s0=E###bj!Uwp 4' );
define( 'NONCE_KEY',        'hf= 8<KVX%~GSWhbO{jUYuVbD&b&aI!iPf.5baQ?k[Wqrp<hHLXl?>#kUsEG~r!c' );
define( 'AUTH_SALT',        'c8#fCm??g,W!L/wL+M)M(dT?L*K~SDi(m`o3*#00DHE5k?Z)}?h|1.(ZAI;Y$P@S' );
define( 'SECURE_AUTH_SALT', '-FWzSR*rx6U-T)#rwqH,]wXH`h}S(m@LCk`mSbUR@A4lv_FjHcnT;hY[k4AjX6}f' );
define( 'LOGGED_IN_SALT',   'suP:(37JQx$y-d(DA6)!:1@r@HL^_]ee9&_b%1KZ:~mDer2di#ngp>nZif?9OQC-' );
define( 'NONCE_SALT',       '(97/;1<U3M1nSxbAL1Ci.Fpg4xZ|5mQC%#tHqT#zR@tb;#N*z{[[;e8NEJ>PzdkH' );

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
