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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'did-db' );

/** Database username */
define( 'DB_USER', 'diduser' );

/** Database password */
define( 'DB_PASSWORD', 'QWERTY@tyhui' );

/** Database hostname */
define( 'DB_HOST', 'did-webserver-instance-1.coy7o0ofcxzh.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '?(d]osAuNiasK=f!}oPf>e$ySLQI!Bye1`!X|o%]6,tXywjmx$z()#Xoc4FWU!}n' );
define( 'SECURE_AUTH_KEY',  '?tB-*..<VvO}Dz{go_ 9`DaAq/4s*HW5pq:?>]|,yom4=s#(8YC/ $~zv2r:KWdd' );
define( 'LOGGED_IN_KEY',    'UPr]<7AdIf)_`/_!1,)(>{ny-YSGE:HEf_Y**=nF14z0N/Ceqw&%OAGk:WoI/e~t' );
define( 'NONCE_KEY',        '1+-R5Lqjc/PrE7}S<IiPRW:NnF^OYhRL%A71ZLIGx}kl%IIqLJ?oHm%K;VN F2^P' );
define( 'AUTH_SALT',        'ZE- tvhDV@MAu1}M8|L$@czlnIiwmKgHiGy<HtBdrTrnlcBv{;}ZoIi[Mw7tUMKl' );
define( 'SECURE_AUTH_SALT', '&ufJU~F]Z^N#+b2UF^V5YAkcY<$?9h!Tp 8w^y&/=<T<+hMh%zb,5#e7l/B)W8zK' );
define( 'LOGGED_IN_SALT',   '.hCwN4pQPBmV6Lkd?YKZwjJZHp6bCg6|uf~%FHw{qD@{M99$z!.Lh|n.NEl7X,P8' );
define( 'NONCE_SALT',       '!4E{L<O?^&xP|$Ja hqIdr0~oR:#SqmiQUM#mm>n0,0|St2:0?><B0LJ5urx8t:c' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

