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
define('DB_NAME', 'ppc');

/** MySQL database username */
define('DB_USER', 'ppc');

/** MySQL database password */
define('DB_PASSWORD', 'm1lk$teak');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '4D]fiz}^WZX$wmk#R7@$Ko5W#Iw(s._}mRM/pFv{8+5ONKk[n/b:DN62PyT+w]q-');
define('SECURE_AUTH_KEY',  '/5r%/Q7H[m8vtx8xx{-nz,W>|KND2+4E B;ImS9oYc] Zfb]r_%UO$(x[JrF~BEK');
define('LOGGED_IN_KEY',    '1s|3PF}|[N!?+HvANN+q`(|&Fx^{)n0uER>qlG5&rm|7UVOr-_6&eI4DGJU(!]n{');
define('NONCE_KEY',        'n5hg13wBtGb}y9C<rw]143CBh}`(#+@JItI&NL{5id>6wQ|1IW8O>kVQa+&H)9A/');
define('AUTH_SALT',        '?:CZQKsFpp`?CDd5m2aAc@ zuh!MXORuq$-|Q|&IgCfw] N42-ZR/0) |,Olb=p?');
define('SECURE_AUTH_SALT', 'Lb):2cKimQZW6@$;e+G{OevzwP!+{M$Jzip:k #GngZ|rnZVBN-p/.WNznG<fbrw');
define('LOGGED_IN_SALT',   'yB-aq.SEC+mj*h[;i3{W!@Q-+/ AmD-`se`b|B; 6_c~/C{~qSi,(P9_!JW-:hDO');
define('NONCE_SALT',       'EuNo)f%y}JXx[+_|&FIK9[qjeORy ,[UX7YlIEp+P:-ws|!G{l>ki&o+0#Hq|}0o');

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

/** Local FTP */
define('FS_METHOD', 'direct');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
