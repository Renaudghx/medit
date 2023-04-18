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

/** MySQL settings - You can get this info from your web host **/
/** The name of the database for WordPress */
define('DB_NAME', 'medit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'LOCALHOST' . '/' . 'P10' . '/' . 'medit');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Disable WordPress file editor */
define( 'DISALLOW_FILE_EDIT', true );

define( 'COOKIEHASH', md5($_SERVER['WORDPRESS_DB_PASSWORD'] . 'secure cookies' .$_SERVER['WORDPRESS_DB_PASSWORD'] ) );	// Cookies hardening

define( 'WP_MEMORY_LIMIT', '256M' );

// Disable OP Cache mu-plugin feature
define('HIDE_CACHE_CLEAR',false);

// Disable SSO mu-plugin feature
define('HIDE_SSO_LINK',false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vqVF)4nNINt?M@vb:o DsHR[C-ImQU~pV/Kf:D6F{bZqdcA`ITGPu:fDNkB^(QG1');
define('SECURE_AUTH_KEY',  'UB&Ur[j1=WxL)8(#$JB*rS^_(#m&6Yv 0HP%S474M-!8Rc?H0%n[G0XQ<O-dh3i_');
define('LOGGED_IN_KEY',    '_,+?>Zdox;wCH4cV{HX$PekmZEV#*As5Cd89:Ko`:1lH=9ILe>&fwwD`9^L45z/>');
define('NONCE_KEY',        'G,QJK75lG6|@{s@ulaBB;DewY|Rr)k:X9*)[m#c+UZTQ+fs2^!b0>N3dypj~b%M-');
define('AUTH_SALT',        'l7W/_[3sA!#Zpggm>Z>dq?>l[q8G8z@8jtae!((OdGlvq4TgaE*dcy9sB7K8c=T[');
define('SECURE_AUTH_SALT', 'b(@yi|/{4ypW>_8[h-B@*H5-/ YLqL5-x:{U,_C+ylY(?g#Uz}r!}3(BZh6l53eP');
define('LOGGED_IN_SALT',   '~vU~b ibWXN5M!MIB=)534Lexx1L~4b|t^cm,L~%d`CVR]~aq`mE+{zlob3<.7=R');
define('NONCE_SALT',       'Xr[[ya]8Rc4xS3{OI}++4yPiSadgIW$Axk?NR6gIjL(ZFv53JGB({<3]smqQc2ps');

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
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
$sapi_type = php_sapi_name();
if ( $sapi_type == 'cli' ) {
    define( 'WP_DEBUG', false );
    error_reporting(0);
    @ini_set('display_errors', 0);
}
// @ini_set('log_errors', 'On');

define( 'WPMU_PLUGIN_DIR', '/mu-plugin' );
define( 'DOCKET_CACHE_CONTENT_PATH', '/tmp/docket_cache' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** change permisssions for plugin installation */
define("FS_METHOD","direct");
