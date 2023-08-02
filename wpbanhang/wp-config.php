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
define( 'DB_NAME', 'banhangwp' );

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
define( 'AUTH_KEY',         'i_tHeLk[:bwu:Flfg{#wGH;HF8QZ4K{>e?M401-BF/k}tRvCoYao;2{+[UJ.cD9[' );
define( 'SECURE_AUTH_KEY',  'QY.0T5jM n?YnkCqr_iCwhGr$s/MS~+!86POO.S7h>+^mCYa/?#@W&H5M?*vZ|&3' );
define( 'LOGGED_IN_KEY',    '?9L1o zafl&T(_6dl!#{+5)LApJ<AB<=xIOyh66Tq|C*X.YoetK7Z]5d~o}(IOH{' );
define( 'NONCE_KEY',        'Vl>SN:wWb[M|{uAfdCQn<(rgHZG5zznzO>Xo[gh1[MgbOj1[<gJ!?SoIDTT{Wgm~' );
define( 'AUTH_SALT',        'J6,8^Q@xVP1Z-_Sr7:ZP8,k-&+rE85e:-wnA~h98u|-.fULeQ,Z+lC0_!s_kUkKO' );
define( 'SECURE_AUTH_SALT', 'lfV(3JHM)4`hl{RcVI5:p5s<Qz%^WH+vZw(nGC]:?0<eD(!y`f49`O2yDBf.!j<B' );
define( 'LOGGED_IN_SALT',   'R(5OH.tDgyNu2% 4a }J33gH10<@]aTVJk39T>)Q<s:*RWnHtIG(ffjo?f#c+x~?' );
define( 'NONCE_SALT',       'QYhH{7?X?U 4[+:)yft mg,T:x+=P+ecgBl&uh;&uY8&Z]*3hy:meWWUNM-yf.F>' );

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
