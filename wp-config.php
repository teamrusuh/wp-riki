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
define('DB_NAME', 'rikitest');

/** MySQL database username */
define('DB_USER', 'rikitest');

/** MySQL database password */
define('DB_PASSWORD', 'rikiracing');

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
define('AUTH_KEY',         '>G%!G7[[3+J=^t@0+<h|G(x*X|}8Z8|jCie)bt}9-byj 6bV^Q7lLhD}fz/V-Ar_');
define('SECURE_AUTH_KEY',  'G,cBC.6|,lA3o_tVtN2IKIb7f*9F}zZ2hY|sV$u2(P9Z?]+.w#TV@fqk[&N!$+^d');
define('LOGGED_IN_KEY',    'S^HbgpYw`<?E!_*(bnX)`XOMWn%_?!N#i>|K8ZU}Zezv_5Pg^>5t -fmM|+SN,#3');
define('NONCE_KEY',        '`J-]Z*V/TOlM4~!s [I-VVYv]znME72+.u1`%7Dm?WUZGq(/{Qu}7{C|34HUo+RE');
define('AUTH_SALT',        'o=SS|w[LrVQ!VmjrS*S|@NbFl:@5~qdnJK)t#3]P6)fB/A%V@vPb(3ks@g(p.#Tn');
define('SECURE_AUTH_SALT', 'S^IX_;||+DV,3YxEM6,<,.(x~/^asc{<5f6vw-AEi1~1U:>HDYN|Cb0<}Te)H;e.');
define('LOGGED_IN_SALT',   'svw|0vpd] )-!S|}<spTkd`u|>3(4O$0>R:^,*t{@l=`_)(*fmEZR9j+}h;3ll*m');
define('NONCE_SALT',       ',-#3(#yY(*A`m)z[DV?h~:ux&]Cs@pzgf3AsHnG+VN/t3qXkQR-x{NDE3oAid<6]');

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
