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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'darielshop' );

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
define( 'AUTH_KEY',         'NiK@:`b6S-j~q ]> V*!pY: 2tyTsPWIf K=k@Aon`[/E>q@.V?g/H93f^m@%a0.' );
define( 'SECURE_AUTH_KEY',  '6QvGiD-KL}]~4m{^!eKI88kc0p!2SKC->,4+FK-J&L>n3U=9Lg2sT%q7TdMWR.W*' );
define( 'LOGGED_IN_KEY',    'V9(wo<.s%~`m#C6H h*h<os;x,#}wt/8!D]b qq.$zSg)cJv#roB,|[wtPV]X9;M' );
define( 'NONCE_KEY',        '?P GUSlt5&F{5!}>B3Zp&a`O){oT;uKVZ,y}^WW`c-}=FB]w|Lu3POy4~{FVsY}8' );
define( 'AUTH_SALT',        'TMCb_5wC`zpSlD$*G2bbafRPARq=Fgk dg}%eh>8a<;1Bx8wJ@<J@jIH:R$bo~/l' );
define( 'SECURE_AUTH_SALT', 'Q>UJQhT D<9rsw$6oA(mLhGNE~pZbR|noBJ:(*bMv;qn&xPT.&-,mDzp]]N8GR//' );
define( 'LOGGED_IN_SALT',   '<wXDa3?;9TV@@i<9syi|i#i8Yx]>B:7m&I(|xT)m?!MuT}_W RzXYQrLYF>2Uo&G' );
define( 'NONCE_SALT',       '|3&B|nN~OE[b]hL0Y&|t[$Mc8rvlZ+Pj)(d]iAen^~7<NzK>8YU%r<25n9Uc!50~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lab_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
