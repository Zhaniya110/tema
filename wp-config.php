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
define( 'DB_NAME', 'tema' );

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
define( 'AUTH_KEY',         'B]6.>~-Wx&5FSXs5^HGP3c&RmHL)L]==~-6}O^0,4||aWM~JNs,(;[0n,~&IfC!`' );
define( 'SECURE_AUTH_KEY',  '%*2GaujlLpkBiV9gLbB:w8OM,c1)sTE.36*DSB@PMTHQyx:s_YVRI;s<kD5u4,M+' );
define( 'LOGGED_IN_KEY',    '3^P,<Ih!qZ+)wdUbsC3oLrbCZ7(8zKaDY+ufJJC&iOu#)P5p7SH=,h&jHQT&p>e/' );
define( 'NONCE_KEY',        '/L|}Zf,=@oP^R;as8#Zkcn`g>vOw)[Bt}55M,K1H-|821AxvRJAHMGFE74Kz+~sp' );
define( 'AUTH_SALT',        'U/*tLvl}fnHfKsQo%qd)Ny+Qgx;dNoS9yeU@4_M07kDqrm$Srwqb#tj5mz<NVi%#' );
define( 'SECURE_AUTH_SALT', 'aQUbcwkht@|$<5Mf!3i,5vQh-%45LH1Zv}2A*R[~Sm[}.P)^j<;<r@VT>fO?lI%0' );
define( 'LOGGED_IN_SALT',   'bqRTO|?&~s|8eTJcT@^S!KGMG+U77X{:KXfy>ZEH,0<Z[-1_b4Py;[j(U!#NF**x' );
define( 'NONCE_SALT',       ')7/SIil~Zp+]OqdZ=DkZ3X]m+/3?AzZhS!HL~32xVde;}.8bx3jj&A3WgWlN}DsB' );

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
