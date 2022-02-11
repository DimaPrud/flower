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
define( 'DB_NAME', 'magazin' );

/** Database username */
define( 'DB_USER', 'mgz' );

/** Database password */
define( 'DB_PASSWORD', 'mgz12345' );

/** Database hostname */
define( 'DB_HOST', '185.20.224.67' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '#&Gr!]!Ixp^z{+yZZ:ii{yz*P$Ixn|XHVg;Wxvz2^iyW1@0Lli!9cm X89vk^9Yg' );
define( 'SECURE_AUTH_KEY',  'VwB)#iQcgtd?+5,&}jNGUh>U.G:;~h-Aq^[h;Tf9rIx!=-H_H <pHKVScf:>zSc:' );
define( 'LOGGED_IN_KEY',    'u`Fi94XiG5ZQzL/5v%[mz&fk[Idy6Ye|RH5o6Xko}Wbg pOAf]`:qm7@xO&#U>dt' );
define( 'NONCE_KEY',        'eL86j0goma;J}WG#- XZQP|9hjMh4d!B=*3cQ};fb%^1ToAb3;<r6>yLixH.#,6k' );
define( 'AUTH_SALT',        '`D=Th`feZ#Nkf`ui9H;GvIwJIKT}NHQ%u17I&HE .:Au=L=S?[(U|;~5!5[=c>Sj' );
define( 'SECURE_AUTH_SALT', 'SW=Lrp*fLTp8!Ze/]b|97tOjsEz|R <74oJ7CnqZ#8uSm2R2pd=0W&Qtwb+J~L?V' );
define( 'LOGGED_IN_SALT',   'Y<O.WM)$Y&|5@a+~9k)x9+9,XHO4.)^2]}jt%PyYB<_ UgW_k!s/VQ%{QZ@nF?||' );
define( 'NONCE_SALT',       'jP)guNiY9Y_p.XY<]GF*Xp g4yJ@GXnO+$NuK!&^4<w+}b@&+IA$x~;~&D~7W?@%' );

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
