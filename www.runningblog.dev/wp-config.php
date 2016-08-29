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
define('DB_NAME', 'runningbDB5da17');

/** MySQL database username */
define('DB_USER', 'runningbDB5da17');

/** MySQL database password */
define('DB_PASSWORD', 'n38HQ5bkKT');

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
define('AUTH_KEY',         'mX*#p99#SLxei2*]-K59taS_lh2~[dKS8sZZ]w~l5#0kRVGzgd1~|sC:4oVYJzvg0');
define('SECURE_AUTH_KEY',  '[C9|VCGwdo8|>vFG:dKN@kvF03^QN8oVY>v,rBE{bIFzfjQ^{yI36mXU^nqX{2.TA');
define('LOGGED_IN_KEY',    'Rv4@vF00kM$^rB{>vFM3nUjQ.<uI^QBEyfub;+*TA6<XIL*mxi2.#aHD;eiT.q~');
define('NONCE_KEY',        'Y{q7AnQIybb>2+IL;bX.mm6*#TW9qiL++H;5iOO~ha#]t9K:Zd[sl5~~KV8kkR@wG');
define('AUTH_SALT',        '<UX*i*yI{{biL++e;#tA9qTd]twD]_OO5lsV||R81hKO-do4!!NK:ddGw@J00gJFs');
define('SECURE_AUTH_SALT', 'Br0UU7nfMyyF<<qAH;aaHtq6**P2DppW_+i;;aHO-hh:-t9D#SdGwwC[_O15hOV||');
define('LOGGED_IN_SALT',   '#99iOHtxa#:aGGwZS_ll5C[VV8ohO--GJ}ZYFsg[!N0BnUU^@g}0zFQ$ff{,n3cf');
define('NONCE_SALT',       'DuTT.$f{yIP+ii;xtA<#TeHtxa#_P25iOV|po81~KO1hoV!!o4:dGKwZk0@@JF[V');

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
