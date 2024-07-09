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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          ':Opj_??-A1_V*yw;-E)&s.wy;p!=3egZm.B$xh{FXjS/%.``O:/oJ>i2w9uTXLx-' );
define( 'SECURE_AUTH_KEY',   '|{5yb3ol32XdYLxHJJQV2GB/S4d4W=;~Z|w0`#5RQ+)mM();k!Rr2Q[F,0t/qycl' );
define( 'LOGGED_IN_KEY',     '6Tx:aLtnkL76[:Uq.sB_9&S%X#hBrywggNi/f;/7n*x5gn?ct&M1S[Ew?4K E?b~' );
define( 'NONCE_KEY',         'SzbHj:y$Z<y,C+:E6OQOvjF&rava-5L4_[Rc2vdch]]:!DwKq{(sWGHEddw,{|Qx' );
define( 'AUTH_SALT',         'xr/p@W#0.o3Pxh v]8^tNh^76tDpx+@E;j7mwq|qtCC_b4(G%`chE0;HYH%djqop' );
define( 'SECURE_AUTH_SALT',  'S&,?*P6olNdLK`J3T3,r7yA>fDQTVa~ZP|eF19BOo)!]U)nQv@&YZuwY<9%?HzOt' );
define( 'LOGGED_IN_SALT',    '?2DcHFHnO!ck PnLwyt*Z.yGC~#Frf$P;wmkG+zk4,u.SXc*0,:b`9#Pc5c,^QhR' );
define( 'NONCE_SALT',        '-1U.T#WJYN89nOcPGCk8Sol3Joj$+C4D/|ACIom2#|_G**(S}INN3$l5b*0E;%1^' );
define( 'WP_CACHE_KEY_SALT', '**Ajjn6eAI/#(+1DvGa<]aLD}~j^Nyr|6L%.JD6SPTIC@Aw$i`}T,6i<U~ONp;r3' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
