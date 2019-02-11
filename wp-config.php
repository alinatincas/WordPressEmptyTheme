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
define('DB_NAME', 'emptytheme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0+Wc99(n1x=2Pc:998-<Rq%;qz6/U~s=gohchB;Q]yXoO^i97L^F+&Wte^*jMqPJ');
define('SECURE_AUTH_KEY',  '`f4=Lv|oz%1STjzJpU2|RN$*aQSdHA-gwd-d,.JO||vE<nCxgmjmg!p(<G([5RHP');
define('LOGGED_IN_KEY',    '#v@BLH{XHa Ak`Y)$@g{,[o(_dL~DR,zP!&)k=H8I]~K{?A~A7d9$#g#Z;c(-GqW');
define('NONCE_KEY',        'R:k{`!i+>a#SdT[Nw*t+PC*qE3rhOhBMGeLh914:g#|lTw`[#+*zv*Vha*t3;n%0');
define('AUTH_SALT',        '_rba:HS?5%5Vz23sW=WR298~C_bJ*Y5_7==@H6.r(jo,LEou>wFNZ},@6BR/;Ga!');
define('SECURE_AUTH_SALT', '.t?3sBf!hj@~^KR9+a*Fn3:y;f[^7vLToq2O(WKG;Oo_SYfKX9|lA[>j0oE`~rau');
define('LOGGED_IN_SALT',   'FLd`X2*fH[[a@WmrJ9[Hpat;9l_jxnFN?zx-DRw_sZc|Q0$y6O,73c_1NX*+DXek');
define('NONCE_SALT',       '7[* cI]d-^y>@_|3S-WibUwzsde-[YWkj*wMI[ Bx!=GhEz7PtmB_oem/,Gj?<!3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
