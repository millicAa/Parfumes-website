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
define('DB_NAME', 'parfemi');

/** MySQL database username */
define('DB_USER', 'parfemi');

/** MySQL database password */
define('DB_PASSWORD', 'parfemi');

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
define('AUTH_KEY',         '^Ub0}}u[lztd`CDh^(%v0i#]|HPfn`*~IWiWlPM.DT/jf?-40*HWt^5}~UGmOn-f');
define('SECURE_AUTH_KEY',  '{qF?rj%QHNQUkFz_N-ybPtwqpnzudwo3i)aXH0Z#~t)>{q3p-1R`>:|,yr6/-4ey');
define('LOGGED_IN_KEY',    'i1c2l<pKSy*hXa)t! pET||v^WMr|{s@*E1=)yPTlxXb-=e|=NFx/!P,hMv-+nv>');
define('NONCE_KEY',        'c3|`2uhM^Vu9?J.gCRQy| azUMT/3- 3Jdbn1hVq!ggk_/YCoPh@fO`SL?(PWf(n');
define('AUTH_SALT',        'm@4W|`:T3!UCL8iIsM2&Fso,[Xt^zbk)0(i?z=V}N0M(Bh>%blYcE~MW]&Et/taq');
define('SECURE_AUTH_SALT', 'EyB]uN_=tt:+S(o1fE zbxjlhq-ZiQEhXwO ggb*gW~oE`HiO*-l&Q$PIEol *`l');
define('LOGGED_IN_SALT',   '5EjOs_^U^qj9L/o(|ldtw*y$7$LkwcYc|#Y?-?ViVYdb;mG6{nIa@kbK<-A Xe;/');
define('NONCE_SALT',       '0G][20H)M|= ~+=f2JTu,O{ia1|%>}B,R$hx}(1wr6F$|>|CD,,L$(|6i?Jw6eIU');

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
