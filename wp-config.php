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
define( 'AUTH_KEY',         'MYh!{[GSQY!T^TkK57U~jTC%HnXYVOabff0AjP+rUaDfK1JxVrjLuSR)|ZgF~s)>' );
define( 'SECURE_AUTH_KEY',  'uw=^=#t3pCSxq|_o#2m#q G/ZN-mDpitiS[j4n>BiZORTB~Hf}5wgn*_yE?1R,}7' );
define( 'LOGGED_IN_KEY',    'h=2Y$:V8u.$4{!5r7G^Oqf`tvUsXOaR}aM]AOWF0JcN-K}w</b.Q:r$D~9^KPS^;' );
define( 'NONCE_KEY',        '=#;6aH)4*e(L>8g0R.ZEQzp_<7`%Uq8>]Q@,!?.efD a:v.nb>{j&XGQ2-9!qKB:' );
define( 'AUTH_SALT',        'H+(0:`Cp^+[PR O3AArAr6{GO`:{MX7sn1)Z8i8,NTQ|&(5!g4ZJh]/QO:xlE-:6' );
define( 'SECURE_AUTH_SALT', 'jo6UZXQ:+c~<_p:(XO#K.,b]VbNrTj@o/:b&>9r5l^c,`A)~/;F1C(8]uM2U-O?!' );
define( 'LOGGED_IN_SALT',   'O$D.CZ{-{;Hxx}6M67)j^OD;&q^NMkl6EONf.>hMnTb/LR+]5js6~1by1Q7Mq<{I' );
define( 'NONCE_SALT',       'HH0FziNJ^Ne(1tH>;$StMgXO}y|tH9(s#;H!H`>eTGk!XisZz9Tgt@{+e !WkVAL' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
