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
define('DB_NAME', 'runningbDB7cznh');

/** MySQL database username */
define('DB_USER', 'runningbDB7cznh');

/** MySQL database password */
define('DB_PASSWORD', '14LL7ocfTo');

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
define('AUTH_KEY',         'D;e2i*T+amc$FU{Uj3JrJU>j^X*Amy7u^Mn3EV}8k|Nc:VkCRzYn0F@>g|0ozF@>Z');
define('SECURE_AUTH_KEY',  'X6q2T*{p2H*]W<2e*LW;FQ$7fvMn@Uj}jzIXEm$Tu,bn3q$No4FsJV-4d4Js}grJ');
define('LOGGED_IN_KEY',    'q$W;9m#Pe;XxDP+$>gv7M,FU}7jBN^BnyQ$<YnF$IUw|N|4c@CO|Rd4KzRc4JrC');
define('NONCE_KEY',        'T@4o0RsKV:gsRc4c@Fv!Yk0oz5H~Gh[al1S-SeCO|Oo1htKW_VlHT]Tt6myLb2b+L');
define('AUTH_SALT',        'Z!kFg>grFU|No0Kl:D-GSx1apGp~do4s!KZ[5h8Ow1HT*Wi;Pq*X.;mxW_;lxDt*L');
define('SECURE_AUTH_SALT', '+XiAmyPe}jvBc>3Y0Fn>Ug3r$IjEf7My,br~Vk:N-|K!:Z-GR|co4V!}d[4g!JZa');
define('LOGGED_IN_SALT',   'K5@N!g:GzZ}pKt]eDW:9w_Z-5d5Kt:b2E+<e*AmAM.i9L.;m<HX*;Qc>frIUzQg>');
define('NONCE_SALT',       'pT:lwOa1St5t~WlyQb3EqBM,nE.;m;P+<b+ET0cnFU$}c,4r!JY7juBb,3jFn');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
