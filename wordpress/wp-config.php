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
define('DB_NAME', 'coailinh_local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Aa123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xkWBEG:WrD-@8S#CyFucmz@zr[A0+v4*^UX]vexl;=P+L_G:2}+:&mThY|-1&ETQ');
define('SECURE_AUTH_KEY',  'Cd+qj(K(tM}iFIfw]`/y(|zR4hxH<?ez(.]+ij$Gd[r>QVF?Pnk4_rHY1:[gxyJ=');
define('LOGGED_IN_KEY',    'rb&*x -R)@mfV*RRY0w0Ak?biJhHh7dy1c2y*izy%/{Xvfkub=C%V=`Jfyu4F9u~');
define('NONCE_KEY',        '~wX?[- >vu_?p%>J|!/ezUn&&>vCsd3tP)Fv5x5B#n4%#xD}oAdI-Kmwle}cV.Hz');
define('AUTH_SALT',        'LXol.E9t3N+?7UbL%ACTOXQSX!y#{vw,e 4#ICT;`q|}(0%PV_cL(/GH)LQS(HlY');
define('SECURE_AUTH_SALT', 'H0Ks|tb7C]|l5ef5DCqM;^)Pa@PVUZ?%D9C5KLY, 6ncwE`!Ky7gl *TP~fHlK|9');
define('LOGGED_IN_SALT',   'fr(f?M7@# Dt@N+kJo&#hb?oGR(]WRnY=$G|zjq`=5l=L_OLXAa%{g+%thDS~~d~');
define('NONCE_SALT',       '%cKl5> g?|#Q;pSB][@O{t^Du_hLwm[riq<H^?L7?~`Yo)z7C&1Am<UEhwIQ3)bo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'coailinh_';

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
/* That's all, stop editing! Happy blogging. */
define('WPLANG', 'de_DE');
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
