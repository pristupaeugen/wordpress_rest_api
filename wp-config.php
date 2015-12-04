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
define('DB_NAME', 'local_ciklum_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '********');

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
define('AUTH_KEY',         '^Fz3tU#LOQcH+.uNZ;[^./wEpN@@.O~oKAM~MKKul-bQ/D1mDzn/i1>gB5Bp~1A6');
define('SECURE_AUTH_KEY',  'cf=+-%$A{jTg2PUSBmIUx-e8(K/F}])$-_!2&,62U.%|Fr5#Bp;(q`g4>Vlx`h*U');
define('LOGGED_IN_KEY',    'o#,yt3br,<9eYBZOd)Wl6C+NZ#FToA7 ~tw<b`EQ2Tqe{89muz?0hlNfWrY/(]3H');
define('NONCE_KEY',        'wl/C:^-U}0/xD.<NYSh^F$^Q<TDsLw?&KXh!z-Z?U&n;hxI?=_#$xc^9:$Ekf,fz');
define('AUTH_SALT',        'A1VM{Zj2;avk$hjSMR;+e&9T8PxP#=amUHD+]%}3}>x6@JIrLrWEN?8x3/v)+B);');
define('SECURE_AUTH_SALT', 'gsFQpi-A0Jx|:-F^1a/~#84TR1_`|hVQdG]-|qn](|pDBY{AJv+$,MBLA=d03qa&');
define('LOGGED_IN_SALT',   'Cp[6U_x-kcqMH#LF^([!A~a/a5G@3:VbF!]gdYO[]b!-@}$y{g38u7%^+7mHcsSC');
define('NONCE_SALT',       'O*``3sd]}$tQYlW5%N=R2n$S~:(F:2O?.vJjt|wu}(|X+uug/@AJTr*33O+n>r U');

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
