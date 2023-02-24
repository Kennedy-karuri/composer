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
define( 'DB_NAME', 'tutorial' );

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
define( 'AUTH_KEY',         '&>}Z`m1&9!UZQ@|OcgbAW9X2M|T>@O5lZO6*;]RP=O*|E@+5a=D?H)CXqs,2dr@#' );
define( 'SECURE_AUTH_KEY',  '=QuNN[QN<j5&MuL;G@S:={|97Y*-vRA=e~uPy/!Gv}OL!piJ)v($.g]t!21u?w,s' );
define( 'LOGGED_IN_KEY',    '}a[KNT0yy=PE`Pjb5&dX;y)EoAf@#;#R5JD=]j@&ETn},-!/L3Pru-r;LYYr5}i+' );
define( 'NONCE_KEY',        '|} t?+qJgFcC$6_Z?@vq_M![ `@~wkKw`.hTN,c,!=xccmyc.DF_[@IfQ@6mSBN[' );
define( 'AUTH_SALT',        '7bj$ ]e4togx!uzVN_;_|s+;V&W< ycJmDbkVB7,>NIA|fR/(oSX5W) rscyZLy{' );
define( 'SECURE_AUTH_SALT', 'EdRKM=ENQ8IK818Psj<T7.q4 ~pONnTCWptRQG34ieZms*llE(S@,RONL&Fc3=)r' );
define( 'LOGGED_IN_SALT',   '?$LO@A`OpSd;Bc0E~FUYYc3Z5Q.X862Y&uUfOFGHKBc:aO(n6{oN{)D)9V?=H~->' );
define( 'NONCE_SALT',       '9@X#efD5c!ADfTu,cx(?-yJMjvL1T$a5P%o{]FgtPD1z7giUf~`*Kn;XcV:PFC5A' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
