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
define( 'DB_NAME', 'newtek' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '^lu-pT=Q$(;#F9/4S9;|l 3[H_c/j})>Hh#4kf}4(;hJhH:etn)ERy`Bm:qkgw.@');
define('SECURE_AUTH_KEY',  'W1u]DgYs1NANQ#xSC:h=QFL+]Pi-*y5w|XaSW9Yl|wgjO|2NXQ4DH@9GNYlzy[i[');
define('LOGGED_IN_KEY',    'oFN[+2ZHM.c-sE!2-n2l)T9qR4UW6Yl-;};S!w*C1Sv}0FL@BK!qm)Z0fO^Dr=;-');
define('NONCE_KEY',        '18Dlv[? w !1c2`IJM3EEURp()bRN]S1I@w s;?NjpeBj::[+2@y0G3/!Ofp;bn/');
define('AUTH_SALT',        'T8`U{NvgIkm(4QU^x&+(/rl)Z=|o+5oOG-*AXLK#V}lIr20ltm<[b9cJ]VRIh-[s');
define('SECURE_AUTH_SALT', '!lRr4c]Fu4In@}TY0s[]d)2%vVXmT0/?q6*vK!|ukJayasTU-UV%`{km;K()$KSY');
define('LOGGED_IN_SALT',   'FtbXx&[QSv(7!+*2gYF#XbAH!NIA<nd<Go%W>y6LF,k%S%3B6nRSs[DOaxpR;}u2');
define('NONCE_SALT',       'GsHIo3Z8<wapr`+yRfuITHKn4.L[#|e?`ora-40bl`#5G|7SY0TIQZR$upG|]O&v');

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
