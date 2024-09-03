<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Test' );

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
define( 'AUTH_KEY',         '^-YE3_w:pV#g,#!QcM^8d);!W)G_xp9xD>W4z{t,d `N;3o]Ol,%i>^z}=UqllgE' );
define( 'SECURE_AUTH_KEY',  'kjd*2WdSioQc>7?Qha{8cQnIbe<vr`!uiS0>f)=Ku%Lp?J.QUiz(UjaLAwc/lJvS' );
define( 'LOGGED_IN_KEY',    'B8Uu^$__ekCdTcq_+0lm|(&Lfr8OaY39~du)T7*I?47tGy;]zm_9O;t%e Pl9O-t' );
define( 'NONCE_KEY',        '5|DyMAr]W;V|+=X,W37(X;KU/WK+53mn0v!.Fd~C0ooogeJ|#_g[{RnO5G7(mg$F' );
define( 'AUTH_SALT',        'U-ZW,BxbH](+XMHTSmx[P0ITtUd~Q}!(`0hbtQ4cpqtZ_U r+w^FtAxr+]3w(Xv%' );
define( 'SECURE_AUTH_SALT', 'N%5C@%<@dnNQAe%j,%#L[G9sV9eK|~vN0Z5}~:(s-ohVM#EdJ.U.AR,j5r2iS6c^' );
define( 'LOGGED_IN_SALT',   'rx?s_em~?kg3Md7k;PUJ=h+eyd?o 6[XwLt3$s3Qco5W+w1n7yhg8W(m02f0S!Ly' );
define( 'NONCE_SALT',       '!P%_[r;<U>>COsC5o/n02pP+?.^EJ8KO()D92FPp8nAXcXnIUOhE6@A/XH0`ZKTn' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
define('WP_ALLOW_REPAIR', true);