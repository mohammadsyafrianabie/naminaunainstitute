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
define( 'DB_NAME', 'naminauna' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'z:.dJA+=0Wu$?pec_2_NxN&&X:kf ]5R6flj}9l:Z,8Mp6U/j;3ZSCec9,e}Tg~V' );
define( 'SECURE_AUTH_KEY',  '{<y;Myh;PcQRl&6r|U50xc,FU)aTrA9-~zB7wOLoRmw1jn5[c,dpDUD!5=XRmMRc' );
define( 'LOGGED_IN_KEY',    'El|,y0]ZK$S}uwk+~`tjZ-c?U&d}qD#}NlaATV46x5M3|yV]goHHR$^#[C6v-ozZ' );
define( 'NONCE_KEY',        'jgnFg<692{)%1o{~T4*9i_,[eQi%4N]9u.D|c}EzL+)7,-43>UDYcZ]af^K-+hdK' );
define( 'AUTH_SALT',        'bumJ~3L>7Aq[a?H#e](,(E^/sh6fE7HOr7jKj@LX-3GrJ{J&-`)9bL`gy)zrx$g_' );
define( 'SECURE_AUTH_SALT', 'Y]tniWo~q0IX$+]q s|nIVl~[4w4$ab~Vm~gwX$3!nN3/L6lKhKVIXc/a, 5J9qw' );
define( 'LOGGED_IN_SALT',   'eb|;d}!q$p)|wm9|Wyh-+*O@BUkWOG$Qvu#ldTjvAtx8(a7e8-d)1)NOW|3VkFIi' );
define( 'NONCE_SALT',       'H:DL^5Kb2iO4V.^n>cKX@m;|qdu~f5-rS=rVa=@0WQD,XXoP>wk-tt)mpOzWq*Uj' );

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
