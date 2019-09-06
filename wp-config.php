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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppassword' );

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
define( 'AUTH_KEY',         'ocQN$:}vvCU8h2%E|7JI#F%!Aoy-sv5-)u L`r%@>]lw32n[eEWL)D ?cc((@2y7' );
define( 'SECURE_AUTH_KEY',  'h?zA.5I,&l9Xd#E${&x%%lPm]m.HkBT3DjiMkZ:F@gEr_bj%UIg{H2G$,z0hrBfr' );
define( 'LOGGED_IN_KEY',    'L8eyU7PXU(bA CV/_df_WdB&.@NhoU]9@fQ,=*IwQF0b!!gkHU&y3?HfzWDD`eHD' );
define( 'NONCE_KEY',        'KIX6M=VTQcbX.YR@`kXZyV)LtqSov4C>MU//0FYY6FvzwXdEd1iV$XMvD6:i{td-' );
define( 'AUTH_SALT',        'px(&}<R3+T0] 7cY%=Zlg&*(TMU]-yaut1^yg2I^bOQ~ZwL&>W5CQYd+xvF.;SJZ' );
define( 'SECURE_AUTH_SALT', '1o37c3N! 4m;elY?=U9`t4-G2[stF0lUuzPRuKhcU}x9p@mN=n)X]QY@P9a 4x._' );
define( 'LOGGED_IN_SALT',   '|iCGRBfa@]UIE+-NZ4A~NiuPc_E-9mK:Loswq%FeMhyo!0k^|I4PQifHf;1 NYxX' );
define( 'NONCE_SALT',       '/JTsL!wd.?ZKh(du<C^Qp)I7#DDV3b@[p9Uhvb|Hzp>zH&WJY2nR?jCb|.hTGSd#' );

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

# Plus de mémoire PHP
define('WP_MEMORY_LIMIT', '128M');
