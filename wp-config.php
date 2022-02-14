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
define( 'DB_NAME', 'odesign3' );

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
define( 'AUTH_KEY',         '&QSDOq%[Zdz}9-X3m,&=vfVt:Z|V!Cf:$!Me@I>^mCDCK54a)1Nr>MIwkUST!RXS' );
define( 'SECURE_AUTH_KEY',  'gj^Dv C()[--2F__L&Z$N;mwz<H%cux[TS.0=yd3RdwEfnZXdWKBOGYWusSn[6Qx' );
define( 'LOGGED_IN_KEY',    ']Ee9M}-ODAYfZeR5Lg/Xy,JRZ.1b2jA{6+qCcUOOwE0=__%1OLj`!L@@IM&.QH?c' );
define( 'NONCE_KEY',        'R5hwku2Y50R Wl=M-9]&!?Cf/h%$t0*)_Gr(B&_YWwKPaQ^2qO =KF;*N)k$X$!=' );
define( 'AUTH_SALT',        'CJ:Ebr(D;|;<8UD68@M5<#%B{mCrNW9<~vRx{U+6L#-,=0 +,OBRUCRPz6.]?pIl' );
define( 'SECURE_AUTH_SALT', '6Wi*>I;DEA]=![->XVf|n0^H 23Ho.=z2#r^!Bzhc^(0M,]::S;bI&W<sUi6]_*`' );
define( 'LOGGED_IN_SALT',   'g{o8Ubu2WP&2@bNqBT=%_}5,7J^=R1KoF_L<||()yfUSOw%!7Uz0N&RaIHdDK85t' );
define( 'NONCE_SALT',       'Vz-aak?=^>!v)T?0qMF,.nX<PsP@UY*F,>rRl;Y+iE+@5Y[?&D7-&lFJjAe@MV K' );

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
