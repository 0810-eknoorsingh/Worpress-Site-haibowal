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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'VT+=vsv#<:k.GjAUD>9a~0|EV3/R6Sp)X@aWl+jX0v7`AGBL.Z)#+9moaYAa -VY' );
define( 'SECURE_AUTH_KEY',  '@3,K1sAx0e]~:6}Pwk@@_?=hUgQ,TL94EGjWST>>eHtub-5(a(|Cu01GP/B/;kOb' );
define( 'LOGGED_IN_KEY',    'A%%%}Yw6dS<g?1]8qEcC!9p<FEZYMT!)<XA6n{ZycRQiBh+I[AU2G*L5v&pXf}D(' );
define( 'NONCE_KEY',        '*G-??K;CjU29BSBTT<)`QSYV2Yl*r,}Bark%aGQPHP/Fx@M[OE4}>z.T0UOz%VV#' );
define( 'AUTH_SALT',        '90o#}!&7Wd@RcZcu4bKP3B?B?V3bk!pB_%!jGH}zW;CGzgcZHD<+({jh<O^:?._w' );
define( 'SECURE_AUTH_SALT', 'iL;13deY:59941=*RBTL>.!{!rQd$%1525S^d*&@L0Ykfsn.VL;.T`wq*2+bafRf' );
define( 'LOGGED_IN_SALT',   'lf2lLJf6pa-NC{64~/UpEFd=W,3~>M35@;qTDQ-z5Zo:W^L1UX63_{}{N7~<Bgo:' );
define( 'NONCE_SALT',       '.v8+bgb.W3dP?I3MzetQtP2wm<]O7<K^6?6_3|924i9MD2(BZZR)EFHS-)f|T6(8' );

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
