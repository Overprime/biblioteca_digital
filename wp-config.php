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
define('FS_METHOD', 'direct');

define( 'DB_NAME', 'biblioteca_mincondestable' );

/** MySQL database username */
define( 'DB_USER', 'over2020' );

/** MySQL database password */
define( 'DB_PASSWORD', '!CDIkGLXsO3mC!' );

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
define( 'AUTH_KEY',         '`.L7#XOt,UZ0QccsJI[Kd6Rdwi1~bn(<ex51n&qRhDflyXrH[TO|};5DcYHy;D_o' );
define( 'SECURE_AUTH_KEY',  'rJlLhMS6u~J!xozM{8^f]}q@Rcj%7@c~[TL$Kc#22NB}h%?ZA04b&<{U=K{p4&yg' );
define( 'LOGGED_IN_KEY',    'Iu+c(wibj-?3YKs9cI*I7Yj=#> LMQ>9cMRs^5m?n_.^;/_iZ9$),?bB7TK,lcCv' );
define( 'NONCE_KEY',        '>e|:j&+#APYqSd#p7:KivsmqkiHsxUXt4?_Eht>]%l>h.a4H>j?]5!o;rWu2J: 2' );
define( 'AUTH_SALT',        'hj>=ZsPp+O>sYgkJj1~2QuowdAFdU>HB(9o|?jDoc6R;D]wi><=JBG^qAO_s1V[$' );
define( 'SECURE_AUTH_SALT', 'cFhs!.q7{hk:DQJqQPXwsn#t(:IYy|HPq(YK ^Ena|{WtEKz]pVjqwB$(%S>l8+[' );
define( 'LOGGED_IN_SALT',   '20k<DABnR3d:DfV2Farv94N=h&FjI+32w>8#,;.17a(;|fC}X,@>{H%HYbhzyb/.' );
define( 'NONCE_SALT',       'r_TdR/r9,&).;[~Kz Sh#ETr gF~mY4|l!/Y|wl%Lmo2&:`p{+$h{lJXQBk6S~<,' );

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
