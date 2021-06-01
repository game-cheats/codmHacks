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
define( 'DB_NAME', 'codmHacks_db' );

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
define( 'AUTH_KEY',         '=x*n&yo&_o RQ[UAIJ$B7lh]iRT.9!@PL1 y-2vov%y Go1l(VuZVMsb<JH<Us[c' );
define( 'SECURE_AUTH_KEY',  '|[*44:{{`eM <mw0[5H:Ce{|-X+*|?:YU9T{B7g7>GDsVf[!MEwHk29L@:ptw2Hs' );
define( 'LOGGED_IN_KEY',    'b`@GRb1J-X8^, /$/oSeuhp-d.M`J{/~%=%..lI;5mqn>cWN9k0<xi@hhf]o=N4*' );
define( 'NONCE_KEY',        'B<v{xrnBGQK[6}aG+rw3P$IR93<LTae0e7=Su>@?,jb2H4+5IHB25~U)f^;[f3Sl' );
define( 'AUTH_SALT',        'NO~I(Raim e|+*E HVgYHhsFeU*EtGi>k|.9dA:Qs;);&LOyg yD!|U9L0yI|2.P' );
define( 'SECURE_AUTH_SALT', '70PblXWwR)Z3%hf8l<R>>I!)<uk@^V:{}%~O6$!hk|3VhqyQMddikz8]>Xr6y+|0' );
define( 'LOGGED_IN_SALT',   '%[n4%x7 gGuD:XZak wQzoOa<C:Ey?HzSO21;3l8%rjK9ank%j3rE@y`pe}GKZv^' );
define( 'NONCE_SALT',       'n08#}wP%J.BZ~do2Ukj4sLkbHGtI^yOI50[W~C?U2Iz89(83Bqw}&B]EO|O.>c.@' );

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
