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
define('DB_NAME', 'josandi_student_paul');

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
define('AUTH_KEY',         'tyP9J(<uo>Dq?f{_RoD__I!J/;`XZcz(Z@x]J3PCMZ zAkvDi(a6WXdL3krlBXn`');
define('SECURE_AUTH_KEY',  'x5R]dj;jm(_%(2ku7>EpPrEo53r~*Y7TZ?(sxLFRt <%,*a6Rb-t_lXM5}osqAM1');
define('LOGGED_IN_KEY',    '4g#ZlHD6A.(F-p{s.?}!Kpr@GUcdhW+gFPuI^YN|-NK<(Br{/gn&BzaO^|)>[,0I');
define('NONCE_KEY',        '#,OkArwwvW%/^z#qP$)YAGC~0z-mC`uH;E }N!M7q]Wh:HuN+(LQWSLo)VAh}Z&.');
define('AUTH_SALT',        'Hpn+lq%QqO1`MT=X&5iR>&%J:e}u[iXYYEi+:Ie@4/#U,^iiy5Wo>#aYmcB+]}M(');
define('SECURE_AUTH_SALT', 'NSc/yx;tn-_6V}=@ NQ[ >$5(4v%z>!,(<74%Cg;U,9qh*#m@!XG-36& oeA$Lxr');
define('LOGGED_IN_SALT',   '[G)GfR.^4>3S*^oMyH_AgpMtGyG PU(MQ+mY7@cG4Id~C7[jQ)t)zD!)Ndz;c:pt');
define('NONCE_SALT',       'd.O+M_PqTlxH^PW_(.y(gk+i|Q5 w$fO~?heqQDvX>DU1QL/:%1sdPK3R].iZ(Y7');

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
