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
define( 'DB_NAME', 'mascotas' );

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
define( 'AUTH_KEY',         'T2v3Rqa<BO$`t(OOL_V10eQpSA}SXdXnW!r29?GA#/z!/xZ#AF#th|]kim5$<tor' );
define( 'SECURE_AUTH_KEY',  '<2y9fP)(KjWIP%<C2?FRa*=VyO-Tjw<w3L;m._m?D-7%0R@#LICxZ #.{nVF1y=o' );
define( 'LOGGED_IN_KEY',    'Atm)(_*A~=~y*gT>y3*lTrEZVHcH!]gRk&u$XYoRnf?KOUNIZ/||.;Kv,rwTsp@S' );
define( 'NONCE_KEY',        'U0:_LkAuwP0[Ad|Nyx(/LxTiV:%D|c293GxRu-8R<Wvm#eHiEsU}b:9k#oVTb^LZ' );
define( 'AUTH_SALT',        '-=5}pf]-xo0<4#PJa[DGe$(.(+XW3a`#7=W3)TuUdIhVY7rt!i)c)3H1,FzTqg[)' );
define( 'SECURE_AUTH_SALT', 'c2`rM4pk-#_;]e!xM``-loZn(AL7%cw$a*z|g^~f.hi<0JVBv@nhT]1tSfJCZ`p]' );
define( 'LOGGED_IN_SALT',   'q>wHBHFL4#B*T`jjDRxBrMy<Nbip*8xy$QtztgrQ&NQy`|IvEALPDTjTKR-0|?MF' );
define( 'NONCE_SALT',       '[i_ddP-.V=jvG|sK<1cdI*!~-NV!f0@oNhTz.dy+y$r_K%YwrsDl-M}%9}/O2$n`' );

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
