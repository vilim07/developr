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
define( 'DB_NAME', 'developr' );

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
define( 'AUTH_KEY',         'lBP=R=:_6+NpNEo#dE*hv3N 50!I*yX):UL2^#`I;m:/dDWw&yY/BQ@G|+09%RlH' );
define( 'SECURE_AUTH_KEY',  'q4j#xGGUF:.y.t$:],?g]jX> W<!JMgxEjl?9fbImU]?5zLIva[XHmu^/4TPCsdG' );
define( 'LOGGED_IN_KEY',    '5[gD54{scKqz)J,fjpvF,oNZSDP=`e9{5Ve5m>/wy3-+3`Ug96x5s[[]X6PdGJRG' );
define( 'NONCE_KEY',        'qXm,!FnqU,x8I4!J=jv:3/h89#FbnYa{g4ojlPx&LaKc#RYCoQ,g()-u7=}Rul<z' );
define( 'AUTH_SALT',        '%|oGR82D(h]dlmj{w6:`B6{`vf#fM~LTzLh]_=`249l<@_<mKQ%,4AT=|F>J]G7Z' );
define( 'SECURE_AUTH_SALT', 'yRs^gT]~0=]e 0uN=-hx-9D-r2LcRAuqr]CVhBcXz~Q$;$yX#Y)_$n5<Qi9)LqQg' );
define( 'LOGGED_IN_SALT',   'f-Y xx1[] eayw2*!eC=}K3y-|oBkz^}4(^#DgIS_ )(pIUHBQik|70RrZp&Z<4*' );
define( 'NONCE_SALT',       'NB<p;<Km^(f:D1z=8e|$,k{bUck4cAfQDOd;(x;x9C1VFKord^`,MZc(lodU]L]A' );

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
