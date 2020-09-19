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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2h!Dz-U4/OQnTWAk?7A.z`Nh|&`sDifkEeirmRcr^?bU?^FsY<[p;eK`%KKUXGBp' );
define( 'SECURE_AUTH_KEY',  '?Rb|WS(BE2lvhM_+QqPr(Um+6WafK}Ga`uO!L63o]u4VM&]SAfL)!~$tQI6oyac]' );
define( 'LOGGED_IN_KEY',    '#,eSG9Ca:>C.O,[d$NRQT^oRIn(jXrG-oHA`Tnc~zr94f`a|~GN>*,`H iWCt4 L' );
define( 'NONCE_KEY',        '{DX]Z4nRc)cer7i*R&Djn+%q4xM!WNBFT]#FC`!-XADh>~yV9R@l*UU%L!G$=}B>' );
define( 'AUTH_SALT',        'HTJLP>Nd6{86Qo`]X:13o9)S2*(hnbz`wX4ONaFG.j)NS/>eH@H[*jk*.if ~t&S' );
define( 'SECURE_AUTH_SALT', 'xW^<d4]!G:o{U0mE)i}hk9i;/Dd!-?@afx9V6@t{d*K}fbB>!4;kmeac{WvSLkU+' );
define( 'LOGGED_IN_SALT',   'C!L4pd5H1{`)^2Q;C|(Tb/~<p6MN%K=v8590kl:x* +tY4,tlwLcE0zau`5lY$;n' );
define( 'NONCE_SALT',       'P}qxW4lsdhGm`UG0D3zAhTLX}-yh?]Eix?OJmfC;Rdk@9m..I!!<g6Wm%9EH4FFm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eder';

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
