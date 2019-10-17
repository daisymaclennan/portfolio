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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DIST_DIR', 'dist');
define('DIST_PATH', 'wp-content/themes/portfolio/' . DIST_DIR);
define('ASSET_MANIFEST_PATH', DIST_PATH . '/manifest.json');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1Bv/pOS;V&#85wBy#<=meox[_os])7Sg~S^G5]8|<h7x ;z/eVY~0f+ZQi$05[!M' );
define( 'SECURE_AUTH_KEY',  'p~I7Oa.G,;Ue*F09qoLtMKC879wi,OVOvFG@P3-oj>}4(}HCT)H2y!i<W=fUCPv.' );
define( 'LOGGED_IN_KEY',    'Gd,FH[FMZo,uGc0ghjRr,RfQCveR:PFFnDz/YCV$/P2l)Levjg-EDReG*~,FU{[=' );
define( 'NONCE_KEY',        'T#wyow&$#+ B/@Mg##s)Tu)t4E-gqa!WBPJI:|u:tAB$zd{TD|`;0dop4,qRP<Cz' );
define( 'AUTH_SALT',        '$G9,m2wrSvlhJ~&7g0R^<+ZsK[Gc12|-+4;1,|ah%J#9_d{)SDA2Q.+~)2 uhcm ' );
define( 'SECURE_AUTH_SALT', 'E/^W$Uq}(}:WmylJFT),K-kD6,;3S,ub6x>/:^vL[T{OJpp;JvTDr> |Iled}(B#' );
define( 'LOGGED_IN_SALT',   '^zn$aX^y?jYVC9uqLErdCoPVXadW+N-Gn&S.3A.{YoNA<6by<Y 1bd(UI.)RA f(' );
define( 'NONCE_SALT',       'mG=3)J?IHISD;_er)!o#UB|o~Vw]-E2Pz:9|UDlS~?K9,h3u>%mZ1DP:qgWrrj4c' );

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
