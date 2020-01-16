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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '_/=&djH*+`7{AEIEdS/~#n=BJ(lW]mgK fvR0=hoR;j?I:b},w[}[ti}%mWZ&aM?' );
define( 'SECURE_AUTH_KEY',  'pMjjuWGw[&Y$iU1f4_KSBr4/4EZ>Ez.!@}P^E{)d/s}@!1T;YU]ct_2=$;ZMojFL' );
define( 'LOGGED_IN_KEY',    '=iJtjTf4uHolj3ppr#|rP>|}*el{tku~AeBOms:/.{;B/.q/2Yk@=)1J@uTrG%]H' );
define( 'NONCE_KEY',        '%W|bUY>a@XtBiSS{2ag:){i$5z#[L37xa15kjKktYx9#^cQVe7es~qJiKC]72W7F' );
define( 'AUTH_SALT',        '}MhHPN|d9~Zb|~+?I1oGKL=%1f ]o#(bRU{rnvU*ch2V@E5pMk nn3+|a(M}YM)9' );
define( 'SECURE_AUTH_SALT', 'JO[3zjTP}rh~ov/-BJxBO0_HI$|qH;,[vL=Q{3CM|&1|1V>JCKc9y%jRwY]izC5@' );
define( 'LOGGED_IN_SALT',   '/<SU z-u+f[ *(J~yehc/.k>fihqVCJ0Z8[mo|QkCzeJM;KygT-hbnWTi7j%&25$' );
define( 'NONCE_SALT',       '(nAyP+_fu!Z-FXaWOP6A*wBDNRk/MKw9NHTst%i|^PWFU>oQx5jt>zQSl`bYWlSj' );

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
