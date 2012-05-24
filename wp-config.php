<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|?FTLonAi.xC>ctzA}3F- A.*jHve*!l<T&@.|0SNwv$si%r+|3K^4Xk{oGR=f;J');
define('SECURE_AUTH_KEY',  'o }z(?)50H|+`Mpmp}+4Y~|s(|h1NNSqwh)z`M7BR,<R|E%et_#Lk=IPdyWhb5I^');
define('LOGGED_IN_KEY',    '2t@o&=o~*<ZqgT@-6U6E;&[Z~z&.;K.4kcpY?tE-%Buc^YHa4Xu}$Ua-.~GQM)BK');
define('NONCE_KEY',        '@h!noK4%Krx,_+PjgH.2-1 h#Z<N=L/l+Z)_yzg  y85z}UM1@NmcvvTurG)=Be6');
define('AUTH_SALT',        '8DFcV{C%?LVl@j.j.GxksVO{eEfhuU$UG;wfv[c]r.2{m_L<*%T7{vTsA*nKAy:U');
define('SECURE_AUTH_SALT', 'Z(fvF#G0oPEx4i>b@W/-)2.iZ I-&_FHX!VY+1H{fwf_<XtZ}ZZ:h+7iaV6(Iuq4');
define('LOGGED_IN_SALT',   ' QSIT+)>H+168H]Y*8_q}J?nf}9<pKYh,SOqN4,ErFO35^uOjf=) G4{w@!i-AN#');
define('NONCE_SALT',       ':0nG-Supvf41/vCd@LtjrWae>HiDAP{:rUp.h2( 75OllzITuS*1gdPwM+c16|cK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
