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
define( 'DB_USER', 'bit_academy' );

/** Database password */
define( 'DB_PASSWORD', 'bit_academy' );

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
define( 'AUTH_KEY',         'fjV` #mA[/;_1!X#nXKs#G);-9MWc)Y}BRc$})UHB)I*r75vfttgqz0LcjA=Z;;l' );
define( 'SECURE_AUTH_KEY',  'eL1ZFp0.xZh|:yzF/(k_4F&oZ{9$M.0`UY1QNE7zITfOmiB#ZSTZ.#Zr?9J;L:Nu' );
define( 'LOGGED_IN_KEY',    'eGmA!p:o6/lsR{pv5Z[@U3AWEs,8n-$O E_%Y|<[Kn-MR>)eSY!?6bG+PKcIIm(5' );
define( 'NONCE_KEY',        'PXUk5#|^FxI4%*XYws5E$dcuw;vqJB<kuA_Z_{|(H[B=Nxk v~^PyMrN^#fj_D`,' );
define( 'AUTH_SALT',        'gY>Y{&z>Xd<+v*P7umiv2GQHbyfg2FkCM4WSlEr+0?RDCudP#GG~s=(`W/4Qq:=H' );
define( 'SECURE_AUTH_SALT', '|)*hwRv{Rt-T3`T/wof62RX(6x}8ZGp{fz7z]cu-9d/>g={.{#SVY(hoBQew;C*T' );
define( 'LOGGED_IN_SALT',   'hs^zP-Z2bk^TzAY.9=EP`r!Mpht-tr;ly1g5V8BkuP{DC+=]z+xBD?(}ts]3|Ujy' );
define( 'NONCE_SALT',       'p~VfZCj+m`3dTo_LKn>?~oii<ZOh-a.QA_br .RK^Ox@il:!i2wj)LAt_q|lQoXT' );

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
