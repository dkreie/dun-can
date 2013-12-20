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
define('DB_NAME', 'w_and_w');

/** MySQL database username */
define('DB_USER', 'duncan');

/** MySQL database password */
define('DB_PASSWORD', 'White1857');

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
define('AUTH_KEY',         'H[82[+ZXiP@;nUrAKsGc2H.NT+MoPTO[aurj<|E#GST62{7^m+(_Qg-oNyMYO-U9');
define('SECURE_AUTH_KEY',  'D^=S@)bE{-a5X8qlCC(8%k,~5v1z4-]=!yH NR&4c36<Z@_=`DV`IYP]s@|p.:=y');
define('LOGGED_IN_KEY',    'EC|1QK51bFwQzxz<2y/{/>//S|}JqV_9J8-m:||j4I!D|.g6gVfVz|BFFD!SY{0 ');
define('NONCE_KEY',        'LT7-w:(,oLc*.n)W=#J}Pj60Ih?Z^}UM6n-B2$Fri*/Sayz5/|Sb$mmMc5=bRn;z');
define('AUTH_SALT',        '#n}/Gd;B`HwxZht3>-?C/Q:0dsq|_z^ycD0pVKR=eRC2fY{>Xe-sjgNFe*~zjYZF');
define('SECURE_AUTH_SALT', '4ryk:XQ-*+Ju.)2HKN^3$2X7d}Ip#4x^S345Af17ong`J.rS1&!W<3IY1.r0-W$m');
define('LOGGED_IN_SALT',   'P:%h<`Y6.gRf)N^iTyLs3(#LPLn}-/.Aju*=&-i*0vl5AnTVLHeIL^4J)$PSYBD{');
define('NONCE_SALT',       'c$I<@k~.Eh{@g/B2v2%)FY8u/berjk+x3C|8i^8k#k;4+N.}Cs<+KL3S(E$Xf]!n');

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
