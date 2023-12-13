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
define( 'DB_NAME', 'seva_mandal' );

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
define( 'AUTH_KEY',         '{c|,EwG}zta>5E~B)^(HJ_{{0B7LV;aodhnrbvMq;`!v-58p9(FN|(TV-TdXentl' );
define( 'SECURE_AUTH_KEY',  'B~}1iClsZGuY;5ZMYn&HFM}V%R0Z*hI~!f&>eu`zsE&cJp8sbr+&43OCq6>Ik^Rf' );
define( 'LOGGED_IN_KEY',    '/li~1<K;cn]t*Y.4#CUSlk%+3^=Y}/t-|=2~eMNN9x;>af5krKjA1J0f8+v>ks(q' );
define( 'NONCE_KEY',        'ja/o r+O!2W_L5o+T?S@+(+T4#x9.Q@R,M jef]G:+,oH578X:6Ij$x!a0ma w.-' );
define( 'AUTH_SALT',        'FAcjt6hgTb%<iTNg[4IOr1[uJ C>_^;.er%2kc}!dn|5!fb[eBM5-)Z)G:9({{Je' );
define( 'SECURE_AUTH_SALT', '@z**oki?cT1pvWHTf=4_o{PUXUMJyET!VcG,Z^^R<5f?+MX%]^@j/dq7|Q/7[=C]' );
define( 'LOGGED_IN_SALT',   'BT{qUZSWbPI.(eq8<ng5.^RF#Qdc;6Q#J;/;1)^SEi ]HYNTXpIz:Z88WV_?1FrR' );
define( 'NONCE_SALT',       'x7JwE5z>T_R H0soi[BpK{-l)4k~9OrXH[En)J}&>xu=Di(!}E~oOMd>7|,}4/RT' );

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
