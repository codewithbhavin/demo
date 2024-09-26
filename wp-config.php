<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'y-Da_>EN@y*I[^L(zoE(Ze8(ihf^?fTH5}7nAu5ld/!}V.dq:]1bTo.n<A`+LiO)' );
define( 'SECURE_AUTH_KEY',  'Ph-d!%.U`V#sc>F@a.p58Y2<{i*MzHuXeIsBo:oEt>)e`E7Zr+Y3+kzA ]|[J7/T' );
define( 'LOGGED_IN_KEY',    '4>f`62RC=*m@at`{FCHzn.C%w3s_Q#7-?7d88YBC0xQ@1]lmSX[32A6R1Vt6f4!U' );
define( 'NONCE_KEY',        'jN;/#a9[ZBt`%a.W&*Y%aKqtWA<{Uxb`1r$y&c<Pg?{Xn,(5=$+bKhwh-A6?5#>N' );
define( 'AUTH_SALT',        'jU@?8!OC7T!2ln7dL3i(rD!%IPHPw?6jHH0:YE, NskeWBwt}tBasNx%JeW`Y-/M' );
define( 'SECURE_AUTH_SALT', 'Vg=f5OgkCS-.{l,v=68.i>yD(J60;pp&Bw.tFK&QE$is_$c$fM){L<^;u40(*}1g' );
define( 'LOGGED_IN_SALT',   'Y?$E>JIL_3!c:_NP%_{t*#aHaYq[+r}Lrr0RH`%8J<.t9&a<w[fp>pF8IK|wqHL(' );
define( 'NONCE_SALT',       'vQ:jbD4!$zB.DGmFwbfM%U7Z1sCA*t%(Aph<73e!q#?B< LPU~yb44tqRS)CcZs^' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
