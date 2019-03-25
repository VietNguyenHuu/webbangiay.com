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
define('DB_NAME', 'webbangiay');

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
define('AUTH_KEY',         'AlCXKnd,6txnpd-N,nX Kw<InD,z5K4@@X9@ySB>R&jUmJ0]/oC2mUL9K9|N5P1$');
define('SECURE_AUTH_KEY',  'i#=h,Aw$n5krm:tuXPl>5lZT2V HH~+_7?rv9ak743EyanWx`J$~;38#FB# &pdf');
define('LOGGED_IN_KEY',    'I>(of;w(nO#s9IMBp!eU$;A{Jy-cE!0>Dqy7ku(G_CX,/l<*|V.?*#kg,LbKEx&d');
define('NONCE_KEY',        'Izmn.vb!q9;^mnJ$-}G%%2rv9NZ%:q/(J|sk[Kl*|y1=-esOi25eoO*IR@%E?0%X');
define('AUTH_SALT',        'j06z6!C9GUQ*(1UUgw[7BE/%hHHZ>1aH/5l<xz|_{PZTlD{X/ &`dHLncJw$t LD');
define('SECURE_AUTH_SALT', 'rHBvyZ9mwC pd:QZH<F*~e=F}4oB.]_v6-zl>+h*<#.|i+Vx+$Z}zR7,A=XUl^pi');
define('LOGGED_IN_SALT',   '_- zjzM@9t5E`nL$>n}5B9E4{t,AbjqyOTC1dO~l$pA6cqRLdi{ GKAKHRX[<q(7');
define('NONCE_SALT',       '&RNG6FPyD^I)dM+e~KBzx_c#G_~?I>,XsaRX=<,ZG!d7$W/iPF$p+g-i&m(0FY/J');

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
