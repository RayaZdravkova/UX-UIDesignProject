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
define( 'DB_NAME', 'chamberlainscoffee' );

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
define( 'AUTH_KEY',         '1hUoO9N;rVT&g7h>h*)>><q_!k7gIv]NKFY/p<BR@Z)&i}JxaD+tmGskf}5W|P8n' );
define( 'SECURE_AUTH_KEY',  '!=^KYU3Y1@/=7 IDESyr$dtu;nl;T6vrL.s-w^>(c/R3$:s1&HmUDbve(*%xxp;0' );
define( 'LOGGED_IN_KEY',    '=|M/rN/<hf/wqw-GkxHk-tc4;T|jAIo$O 6chv{Z6Z=r&P/,tQC*6U%,8S Ec(tM' );
define( 'NONCE_KEY',        '<i>~t[M;S<o-$.pS]%2,_qy@&jd9=YQ(Cp+G-Yug^>p];(o-.+u>T(zyytF{=vTa' );
define( 'AUTH_SALT',        'v[?%xR#M=zWu5`~P<k6-v[?YHogO6+EB3?(dH7$T}?u~yOmXmUhyC_]A]Ik;0x9j' );
define( 'SECURE_AUTH_SALT', 'AY$B@?LN*g6[QhzKU.oMdX%axqPFjwSB5S9-+[o/4WV-lLQ#hr.jsX|#35@v]1h$' );
define( 'LOGGED_IN_SALT',   'Z3TVP &5(Y~e@gIu7%xr,[_cW.,Uba=4B5GR~R[hoESF#.*nX XAKee&Vx_(8g.y' );
define( 'NONCE_SALT',       '@DzLCFxL$H@M*h`9oXyri+{L.6jB&iNGw5!V[ iR<COWF{U8v3]NYB.F-YaT(Ge0' );

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
