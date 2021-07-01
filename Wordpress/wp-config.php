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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'tK ojQg5HioEO6t5wIe}q=-cN3p=doN WxLg|$@%WdPd%3LkHh=o` Pg2laj:U&k' );
define( 'SECURE_AUTH_KEY',  'SB}_D)+LSm(N-!)_x;g_R8[NC(h)1V<aE-Z@.8Ut(?mN0jAPV>Kgx1 dzvHQC>aD' );
define( 'LOGGED_IN_KEY',    'yxS~LiIaNCWz6L,)f@NtP^NjPLYSqu0H#)l`KgeYfML|tSIl#TbS-gZMKK_6dM(B' );
define( 'NONCE_KEY',        'hOEA_(PLJ=4XE>1_iAN$u26SuZwm0l_OZ_k--L5~V 9`!p_i>aOs,qc=^<(SjrJr' );
define( 'AUTH_SALT',        'Isd<nPK)dEHrPcw3o#tXix&L~&%|mj-GdFKvm+6_H&q`jQc$)^5 6@,G3`??j>8X' );
define( 'SECURE_AUTH_SALT', 'Zw1M9wRa;0$nKL$=!(@SkXBgf41*Y=w<Yp&{u@^ZOR3dK%E=Bs[xu$pA5=K^z%#-' );
define( 'LOGGED_IN_SALT',   'n%@r-|6*:s5a pf cv~,$6An@;a{o8*lq9j20@o&gxjgF,nF^CCH{e>JGv2iln7E' );
define( 'NONCE_SALT',       'n<^;A],Ceoc+p_jK6!Hf;v}Tj@7pMrndz;.UE}2P|.$z#?G;R(Scpex{$?gf}|4n' );

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
