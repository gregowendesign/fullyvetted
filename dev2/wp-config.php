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
define('DB_NAME', 'fullyvetted');

/** MySQL database username */
define('DB_USER', 'gregowendesign');

/** MySQL database password */
define('DB_PASSWORD', '@gregowendesign9');

/** MySQL hostname */
define('DB_HOST', '213.171.218.231');

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
define('AUTH_KEY',         '`+:M>$BnSFb?1IELerR +sR@1L@6m9Bm;M7$EHk#(PNw-rq_q/o-m{p84]mLr%yI');
define('SECURE_AUTH_KEY',  'n]TK9O[uU}YVb32#~[&}2;*h[idEQatL)yk~gJT;Qh-IUXo_ihK*B^_x>4F!Y^=C');
define('LOGGED_IN_KEY',    'x([_5z,]BDw *~k$aN|M%yghk_zwrpwO]Ku0(G%_ 0g4P9Y|9.djs:.&aSA<fc8s');
define('NONCE_KEY',        '$=wIts6{0.,LQNiMI^n1JMd$ xlB(Dsk!q1*%?56Xo]CY:`W1,vlI%PVUp@YxHro');
define('AUTH_SALT',        'x/%DO0ov`V9FW/alI=MB6Z^r5]?e?VT!m$-d3n`-D2_0?7T)M%:u=dK35C#U-]U~');
define('SECURE_AUTH_SALT', 'mbjkNmVDNgIlfr73ht{OZ +/<sWO$#WBd(.,7PO`VJXbLC25A}p*x0}D^u/s Qw(');
define('LOGGED_IN_SALT',   'Ti^e/Z=_Db4&9qrk4@`E@,+KY|<[|vQC@#`V)l:YPrDEdV%^M~}mc7q9Sc&6TS 0');
define('NONCE_SALT',       'VNd$S9Mh6Xtc[ =zKG_)M=85-kYDs(}E8xPt+Wp<uXoJ^CG@!eDmH1tktQ$fav2E');

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
