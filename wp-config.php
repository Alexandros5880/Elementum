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
define( 'DB_NAME', 'elementum' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         's]o3Ns#FaoG.+l5feV`zQjaPh5|Bgh`(7#q^?u(`h[iS,%$pTDuSie4>D?#$gcFr' );
define( 'SECURE_AUTH_KEY',  'v;L9D~|,wWjOZ4qp=eL#h`FErJzI|*zBkuW/P/nj5~}r45wm+6o06M%I.CGAs6~p' );
define( 'LOGGED_IN_KEY',    'hEk.Jl6}~Y/BfHV?t/#S3 brs{vYX~I:qN`3Ck-w8yrX|>m1 546]GGJBfr:t`=%' );
define( 'NONCE_KEY',        '&U:j@n(#>jw)kZ]V43e5bE/}t?4E!RkeaS/I+r$N*P4Ci5:m]q.i7luL,s5mi1R=' );
define( 'AUTH_SALT',        ';Wt.Y)Q#+:E=L7>A1}LV_jjZ&DS8?3Q,QzH^)L`xT;1O+C{Lsd0(cyQtF,TFH],=' );
define( 'SECURE_AUTH_SALT', '~bL;A}*4 gI8rpaMl4UJAs|V,er7B#H:QLvVU$|PC6w{l7P3qh?9<DES?q *ULck' );
define( 'LOGGED_IN_SALT',   'TBf<i8pxx3+(cZ6z@/S,0q&lr}SWveTdQI|JU26pq2}%xM]00i2azNnKv#BE}(B~' );
define( 'NONCE_SALT',       '_D%mqSpNU,=5wgpTKO#2x,VBG[dLUkU_)-loG@eRm@-~Z#B@wI3M(59^G^gz5y<(' );

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
