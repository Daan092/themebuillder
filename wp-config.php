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
define( 'DB_NAME', 'themebuilder' );

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
define( 'AUTH_KEY',         'MOD6[#V5lO9m6{t)p+NXZF<LbW$VL #`!?!nnM/0Sw1q2fWiGZAhzM+>WNfnW?n%' );
define( 'SECURE_AUTH_KEY',  '|L!WET)8<w]TEzWNC,AHd)[X(selDPm.{{l`!D35W4eYiL#nc_n ;O8BIKO$NUC}' );
define( 'LOGGED_IN_KEY',    'v2N4kRD7!Ah^Qma9Zt77HSd)/h@58W9jIOef7>}x*K <:N6W;0m!L=Ro$zEFfx#[' );
define( 'NONCE_KEY',        'a ,E]6yP9ZIb[N05&vAXV&(^Ay?%2.]~X9G9=vOuB]Q1NX-<%uHA-3Iu}=;0X.mY' );
define( 'AUTH_SALT',        't*|F?i.vt#;11X[Pm3@^%:OJg8~nsi0} +a,(hOz]#8!X<S>_qFe;(LN#)-d$LI0' );
define( 'SECURE_AUTH_SALT', '#HM)uDitUJK1?h0Q,sZK?^H_o,aS7b6KnfXa?$2n!_`Z:tr@^(3[UX5-M.onE=(B' );
define( 'LOGGED_IN_SALT',   '.mRO)hg2qp$MSB?}r74.T8Z+{(tNPyE0k?Dp]AkMT09WD@M}i5jb)YwmCI%^V3g0' );
define( 'NONCE_SALT',       ':oFKS!LI|,|*q%qRw9M*U/s <y0fE{1he:[MouN]o_V:]q16VccQh&).BR^|AQq|' );

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
