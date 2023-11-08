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
define( 'DB_NAME', 'lamp_db' );

/** Database username */
define( 'DB_USER', 'lamp_user' );

/** Database password */
define( 'DB_PASSWORD', 'lamp_password' );

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
define( 'AUTH_KEY',         'EbQ/WNH@hP]COSov{9aiCAdb]8Ob~vBD6dM}`x{cmw[g5!R h^C#V(gB4&{~%w?Z' );
define( 'SECURE_AUTH_KEY',  'meap%)W~}euHj,XgHRx`-GvW>*hEr5Vg@2V+UP%;4b`dXm%,k)L@irQs4Ic86Cii' );
define( 'LOGGED_IN_KEY',    'ty.vkn4#U9bh#`Hhl!1Sw7vwG7CUg1IJM]{y~kX?L9-.z1(+.6`nYj0l]J^=6N6u' );
define( 'NONCE_KEY',        'mxXxgq]]W`GJ2/G7V$xZe0}7m-S+$fX[C,3M~|B`?}ZHv%aRvg5UtXc2Qk}a:>k_' );
define( 'AUTH_SALT',        '2LFtAm{1(1yF_E3PdZOK!c#T8lp-2]BwKu4o3!S24wtZqBwUNhfBBlu#(uD<*Q4b' );
define( 'SECURE_AUTH_SALT', 'prCP49dXIz5CO&s#;J~a2.=/.JYyN8ERkJva40{cuCP*[j;Fg;9}nHB(9>3GJp|8' );
define( 'LOGGED_IN_SALT',   'LY4L=/!KSn,X(GRX],Vo<oK?BF?=a_}-ejlE3M+$yqkTXpIitAf/?5.I)iGPdJhP' );
define( 'NONCE_SALT',       'a3!RPKWFJYNx&e2hk?uKpNdJ]cFxh%qS_Zo5KC8TMZHGScKe(.2lmikbb(2}^L`Q' );

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


/*PARA QUE NO NECESITE EL SERVIDOR FTP */
define('UPLOADS', 'wp-content/uploads');
