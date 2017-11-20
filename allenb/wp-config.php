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
define('DB_NAME', 'allenb_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'w;+s1U<]lJ0;e:Kj4}MIvA5y;zEu[O^M+cs51o<3ID6`09iz2z$pVjh7wZ^KnZi(');
define('SECURE_AUTH_KEY',  '>qdK]=I$G2 QtRhnORX^DwMKPe!|s:&sanyWW3zP0TwAzImQ8,,ZC[ Vg?o3*qfY');
define('LOGGED_IN_KEY',    '`!0KX?Eb(y%8swialDgAU?eK0j??VhYATJ~`q~a%@Sd YzCSf;4diEx.<aDK6jFS');
define('NONCE_KEY',        '6q*DZ3}m0MQH*q7<r2!ayI.~>F|/?!>o+TqHm[i|n8f`rn-)e;@>Fk#{sgsWX(*c');
define('AUTH_SALT',        '!z.l:BO2v[m88Hvd0KmhVsTv5lzia(Y@TeF{fjf@@)F`ss8ys{c68NwuaB;#n[5V');
define('SECURE_AUTH_SALT', 'u{l,>^e9*M<S7Ne>N]PFyjHb#kY+miF+zP8.FYBY/-Tq?Z1rd@:I=bFjO4CSOu@U');
define('LOGGED_IN_SALT',   '~e%7#hbV(l}~*ayS_h}xdgCPJ;h*,?=(atYSe;D[mPA!&Lm{E?H>[[x;})Tu?]^9');
define('NONCE_SALT',       '4`e14-.&m$pIN.jL#BBJ52hh$6r%M!p7ibTefp%N$^PLZ$]r1Z!<z{xZ`tW<Kf$e');

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
