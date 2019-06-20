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
define('DB_NAME', 'tikol');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sandalo');

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
define('AUTH_KEY',         'fTsA>QKb~Bbfqx~~&<3i^Ee*2w<#2]kR;~]U8cmZH+4|lIp?0q#7|G,>Kbt:J<mK');
define('SECURE_AUTH_KEY',  'b#tq^Ak&U$Yx.i8Bm $cm)}6Y8bN[ih*X)FZ*R(*tgWdW%<7#Uk%K=KuafUmntB:');
define('LOGGED_IN_KEY',    ']~XM?Rcdg(nGp1TD_wn5B)C-o%YY+m:^1cMl=oU(]zX^!8r!|:rukYcv04*QU)k1');
define('NONCE_KEY',        'byd;H/VPkFA#MJ#uX?eVKCMsq`Pv%+t^Nd> akBdA@yh`6I4hK=5huw+HJ]wtRwq');
define('AUTH_SALT',        'Kq9RZ2w$+8zLBSd(JvD0ecU1Rc$x?ZOK$k&^C1.kb&(2W*!:M`*,`zju=p={zUL6');
define('SECURE_AUTH_SALT', '2!5_J5eGirt,?4,.81Bol-.Uf/zrNqEzC%(a4f1=& S2-85m>j&&[wd;{t4g|i 8');
define('LOGGED_IN_SALT',   '^_,oS3T@=)b.GG1[GusR<:c=%Env0:D_$2W,&Uf|3?![+jtn[K|7$*ss8+1nn?*)');
define('NONCE_SALT',       'k3JU?,D]&7T_t~I;4M&)o8ap`Of2vGd3=IeiubSK;Pqtm!T-OUK;qKk!h9j4qWxz');

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
