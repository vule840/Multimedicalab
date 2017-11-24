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
define('DB_NAME', 'mulimedicalab');

/** MySQL database username */
define('DB_USER', 'mulimedicalab');

/** MySQL database password */
define('DB_PASSWORD', '19032012T');

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
define('AUTH_KEY',         '[~(J0D{7_2OO?h)[=Ppf26Yf2y%>!m5l[_z2z(=QpVLpS>EK[SrEHKAmzZY&(`{g');
define('SECURE_AUTH_KEY',  'b$sC5x-dIJ+{_J| Z7`rlCoIxjx!hQTx,(}^TM_5VhU./sdLN86u! @iQvG%aoO0');
define('LOGGED_IN_KEY',    '<X56lqW?=FRQH{%-YgKkvP4EA&KMW8#NKXj-+?H3}e.1H/[3j#8{T<U*g!_2OJ&q');
define('NONCE_KEY',        ']PBBHm-r6!J@(M&[qe~y WP>8fUv4Q5vSm?ZG2cb51~_rWbHI|zpYaemu ?4Lloy');
define('AUTH_SALT',        '>)g5w$&G%k{ghS9+&QZ`=j?kLuZHER,WWz up~~B W](5btRL0&AgQ?-in1bPRO8');
define('SECURE_AUTH_SALT', 'pK0UW$@)eFzAqs7*)6v)p3Kq/l-Xk4/Cx5!G5ws5P|n2QGA?}]$;NdF5S~V$O-1V');
define('LOGGED_IN_SALT',   'O:*mQZl<mWe`Hh19=O9*)8nXV=G$l>YG5]IqGnFj$M!cOjZZO~l<I+8`6z~58}$k');
define('NONCE_SALT',       'rx(Bj-.vkAnH.Jvc:$dxI+[x+SeYTmoV.6DD|@<R:E?gph@?WHq}OMR1xkdC8^{;');

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
