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
define( 'DB_NAME', 'eniacoder' );

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
define( 'AUTH_KEY',         'OwX>3w+ZN @GsbInz%PN*`J(#Vl|hD;~M_DdrEx~RN,TsIfz>&ND-x!l  p6uF N' );
define( 'SECURE_AUTH_KEY',  '][Ak60Yy:>^hj(yc ]}NSAr0s>pw&f[F~z>Yafaok7<w/?aJvz.^w{5$flJ^L]aK' );
define( 'LOGGED_IN_KEY',    'KlKo:!9N !*&zuvnyNS6#P`.3D(_`KdVnp0rzJTZiV?UfrR>*j=DMD2;zw4#Z6UC' );
define( 'NONCE_KEY',        'cx DA.@/c8e#k[mt`[25*%Bix>pl H@mbx{Z;,v^1]m88jxm2Xw/GDi|bYW3gqI^' );
define( 'AUTH_SALT',        'U4Pyty9VW[65Y`s;3junt#}/(H, o<|^D ?eM#(B5@U+ykb]RK^^V6[zI%#?>fZm' );
define( 'SECURE_AUTH_SALT', 'N,p^MjNq&0)y$g.D.`:/7P ^=M:Ln`lvc4E*iA-cNKz)8B;A#0-Jmbpzyv.7LS?5' );
define( 'LOGGED_IN_SALT',   'Mf)k$k:>&]yb!pa2rda/2y)Mk65x8-GuBi0F/obtJYz&mL5 [yu+>N{)vBc?<%,Y' );
define( 'NONCE_SALT',       '<{0R!oGFEVG<^*4eV,cz}P1z.c6j>DBx3)8l):5D1jC/2lv/7G:,:93rNz6Hq<+u' );

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
