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

define('DB_NAME', 'burorvv_1');



/** MySQL database username */

define('DB_USER', 'root');



/** MySQL database password */

define('DB_PASSWORD', '');



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

define('AUTH_KEY',         '7|GMFSQlaF@EhJ$}~^US`rB9NAZ4/jVWwPlJ!rYDHr&|cVd10dE0]uq@IBeYw&(f');

define('SECURE_AUTH_KEY',  'd9H)$Jq=_QM p>&{687B>@FTOxQf`zVVJgq))/s6bKJnwW.Xwl(PBQ`M<egERL{k');

define('LOGGED_IN_KEY',    '3sICv*w5gE[4A,XK_g5y1nIn:~8zS-*=b9s>aIf2[pGY{Y%2ziXQQE|l3+h)fVXV');

define('NONCE_KEY',        '!.kvv6uYmqNv*m>;WuHGdgNU~gf5(g9l{<gHPXv,~lLi=#=Lz3%?>4>}xWojR|r4');

define('AUTH_SALT',        '2*~OW)FLturqo%`/p$fqNo~!{%irEg<x.jprKvy ]nMrAhVBd2#k0Rr@O62+AEOm');

define('SECURE_AUTH_SALT', 'TF)NHir5K/2eeE;{rZz8j}ZCzttvB*;xf->*U^]GL+1fbW,(_b:gWv)/:1 iC^t#');

define('LOGGED_IN_SALT',   'St)jVb3VF.9uG2-gYWF3f[n|^ /]<}+`QRkdGKVbh$<GCO6JY:MNCjU@Bz4Fih/h');

define('NONCE_SALT',       '5)}AXR8?(RAL8Cs<YHEy=]+5rd@U>{fPt!+8m;6mqPQ:?i;|&Io3gL`[3@{pU|Yo');

/**#@-*/



define('WP_CACHE_KEY_SALT', 'burorvv.nl');

define('WP_CACHE', true); // Added by WP Rocket

define('DISALLOW_FILE_EDIT', true);

define('AUTOMATIC_UPDATER_DISABLED', true);



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

