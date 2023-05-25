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
define( 'DB_NAME', 'jofach' );

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
define( 'AUTH_KEY',         'D;]g:Hj[jY8Fs@S+3*/wX#vl:O #!`sam!kaa[3FP,P9Ut`b%dV2P-GpBbNBk]Uw' );
define( 'SECURE_AUTH_KEY',  'C-u#+UKohvQfix9wGgfieTQ=B8s(IjLE1F!*}LJ6+uo:HTuAOe9k7o8QsLZi`ErM' );
define( 'LOGGED_IN_KEY',    '--|CT%ro+xO{lsH1:9kzXY6Ko8Zikw#i611* D&8nT8(J.<cmCYs/zEm71%heO<N' );
define( 'NONCE_KEY',        '/Oli5~X4N:HB/T{Mvkm[:^7X,.5VWRMFXp?:fTru`][ng7AE>=e&kpkOBg:~Fl`l' );
define( 'AUTH_SALT',        'r`x^F}(Wy!C4x: w9r3h6)?(_+_8v1YY8qYZJ[z^9%,a{cT],N[t^WthSHIAwCcX' );
define( 'SECURE_AUTH_SALT', 'dLfdd8?|xa0:@wsPzN%p9l&.n5/(G&l frB&cb~>QfTyqp~uUJ$QT=?rAF[0V7m:' );
define( 'LOGGED_IN_SALT',   '633DM+D!0Aq7!#V6)zQi8bM!N[|l )EHu`w1DM35.RSQdsEM6waOvFd.SY{:pk$o' );
define( 'NONCE_SALT',       '>@}9KuR~66IpdiTd]J#14rWBt`|U^=aWUVLwilB1l7v>}8Z]MT{d%x=}p[ZeGXL4' );

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
