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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '=B$jkCY~YZyfpah^Hc:KyD|Jy8}Df]>sDQx)?$`!^LZFy3#{%fv[K6|V9!xbtap@' );
define( 'SECURE_AUTH_KEY',   '1jpHuBxM02*!oM;F>r^u?U?IVTY!%TZ0kB[C?Vi{]}Y0S<0+KqwVp0MA/)GJ.U{|' );
define( 'LOGGED_IN_KEY',     't-/&+SAGHi]M`WWy#^_$s*! _m<]Z/Hg;-8y%WjYY%L|h$3Ys[f~/H.lb.qJgCb(' );
define( 'NONCE_KEY',         '2EF32mYL%ewafq-:c6^i}  -H!|D$pF+nw:;Jgu1hKp4D)LEy7Ld4nFYe{LfSo=D' );
define( 'AUTH_SALT',         '3 Ih:MBk(7$(g@5^hFcN }^{kCQGBMJj#p,Kv9J5sLS5?%XVu`+QQduc-}@8(w0%' );
define( 'SECURE_AUTH_SALT',  'j&Uxqo8MvcUW3L <rZA)q4`~nuV>{Ie+;M(i8vpwDd{~0_j9R30*f^aNlo? O$AU' );
define( 'LOGGED_IN_SALT',    '+Mt-A#TEU#izp2xC#1_#*<MrvWN<!=eKo&-nn4>340fS>kf$Q8X+Zbhgg%c;XUkn' );
define( 'NONCE_SALT',        '%3uyc-x^{zk(.E604ups7H/[i0zb<`=~YUbR?mdRB9k1hMkWrnuF99a0x*z=-i!S' );
define( 'WP_CACHE_KEY_SALT', 'xZuWu&i!j`FP5d(pL_<=d~ROj;&N_+vT|Ls`vV*GJ|`_f.kd]g^Da/b,vj~<w<kL' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
