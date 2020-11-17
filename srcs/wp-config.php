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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testdb' );

/** MySQL database username */
define( 'DB_USER', 'testdb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'testdb' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '>Qbv{%!hodf53YKqKI=Pl|LPLjNzOG>Py/ODL~0I6l9wyokMB-HdG!U4kK^JoR]F');
define('SECURE_AUTH_KEY',  'g+>~(2Xm-oP9kJ[FFG2)*G-V[,`>aAV_T-$@~ Ph9?=Zw$0BE:{ox%^bd+Z OeNP');
define('LOGGED_IN_KEY',    'uzNNr:{&Dm$:U/^4#j9l4d|J8}t0-4{=U#>1j<*+jK>hiM5Tf(_J+E:@k25)M=jG');
define('NONCE_KEY',        '|Ff)W;ZEVp;d3tc&6Z@!Q2d|J|2*-6%~={s/Qb<PIp.ehuI+p2ub0h;*meTO6~TY');
define('AUTH_SALT',        'cX<WtUZ7S0e+$HMdC{+{+>_%SfZW*}#M|2)6tJ+Z|+~%7|-L}<*YggTYoTxZ7b+J');
define('SECURE_AUTH_SALT', 'hR(5yp|px:Blww|wFB^.4;x6a-zlv3G]@F]Zqy*%I5;S)S#-Otx1:>wW<o-qh4Y~');
define('LOGGED_IN_SALT',   'SFM+h|?rA34l95oW1Y|VWi7l:n{ut[)Z&|~gYrhUOv-Y)kq8v@m1zZ86==4GXTin');
define('NONCE_SALT',       'Xb{v5FzqUV@Tw+a3%w5C.!9WGVaS57Sa:=Q3J;/jr :bi,Mt28Ih=0!/g Z*rt<d');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
