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
define( 'AUTH_KEY',         '!PhX+ds<3NxJ8|y(QMu;^#Bgtqne,^_;;4l49~pB_afktB.<q3GQ3_j?o/gP2<s-' );
define( 'SECURE_AUTH_KEY',  'J/@|QFz:a1N$(rZXCOZaJ3rb$t>Z3@x?c+#;@@`46!5e5U,DuP:^c5q3ArRJPF-I' );
define( 'LOGGED_IN_KEY',    '|i<Mw8d|$>{-3V/D%n,xA_R&*gq;%aB|@PxRxj43asQR?+!iB:`b<>xvPe|ROQ0G' );
define( 'NONCE_KEY',        'X:]{8x-(u%O!WljoJif2d.#ffcW2^ynz(eM}Ta+vT>mHuas,,!d#sX]eC>7Y^bK3' );
define( 'AUTH_SALT',        '`Lj^:eMhk<?:CHu5thfO;]VQ^H 30cY>}=!> Kutmt1$r7CUAy0a]q-@o,{JY2gB' );
define( 'SECURE_AUTH_SALT', 'mb$LCH>hRY/**zKT?@-{+L(X%9L|Fm5d.5r)rscib~>-|#p*(iQA_fy +$wLN?jv' );
define( 'LOGGED_IN_SALT',   '3wr@{mm]k3b%>wg^y+Yh?ff*BDAUJj<.XkQJg <$2lm(K%W=oBiNjr6Qx0=/19[z' );
define( 'NONCE_SALT',       ']n6Vt01Ca) !}i/#;eON3H!nP8YR;A`SndPxTE0fTHf22OSY)~7=KFO@yGXp$p`4' );

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
