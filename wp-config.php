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
define( 'DB_NAME', 'mywebsite_db' );

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
define( 'AUTH_KEY',         '&!b8B]Q3NU{m`D6 (ZAc`/rIRHo.e)c7-*Ry*Mhm?i&|8rQf[,BZ2R[[J| -TucR' );
define( 'SECURE_AUTH_KEY',  'VIK0?Up=`{q_5tjbu_;loj-2vN.i0PP{ky7nwg_e9b~}FZsx_at/N>8C_::zqyXN' );
define( 'LOGGED_IN_KEY',    'sBNgHye&^VqC_TBkj!rox: Er%UHo[A,|7 H*ZB/IGM}a(m>@^<lvEK.p#;TLyDW' );
define( 'NONCE_KEY',        'YraDE8CNyXyKV=)j<r[e![z4adUWL8%|l$-)pl|h$.4I3gWz}4mNe#_}RVfT@_8Y' );
define( 'AUTH_SALT',        'EaLTF7{Nx+/h;H~nns_{(Nf[Z33r*e3DBA(!e~A@mP~^F323kI9O9Ue4Dzl[8tro' );
define( 'SECURE_AUTH_SALT', 'Pf&69n1jHarptbk4]=21I{67!|GqI@:aX:sIn&E7-+UPS8JZ,rA{./Te=FFo_5Pk' );
define( 'LOGGED_IN_SALT',   'E*chKkwAE7tq5S3-94|Pbms&/o_&3#SqM5b4+3T@@!L$.M.!CLME^K^p ;E6Uo2v' );
define( 'NONCE_SALT',       'lh)bn3G7,m^Na.rF}fs!obaVEt<K#+9L9QWt_om#5.xGNB>Rar.]%o5juN2SYg@I' );

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
