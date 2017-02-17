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
define('DB_NAME', 'theme');

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
define('AUTH_KEY',         '$&e2(41b&b>T}|ZDJWK>dH<Hwu4OX2V[(vO[U?q7Yq&ov.Vgj>LH:<W0w1}s-*6A');
define('SECURE_AUTH_KEY',  '>ZK3+[[Io}nQu2Ydc}1k.K/P6A+p;,@VUW73;,Jzhr+qd9y?jt_BGKX9bj=4/OWX');
define('LOGGED_IN_KEY',    '?XbS^@6;9.t7dN(t{<cj(V<n/er2_J{pqwWFk$T2d}4^7e!~vwlx(j?OAQ!E]2>s');
define('NONCE_KEY',        'rO6i/2}MuGp-=DOj)?gn~2)oDRNztp@VlMo9NZ?LN9VJ_I#V_Qe8@n,dF>**,?6=');
define('AUTH_SALT',        'j4^=,h5OH_UZPO3kF)`he*r,q5Tq>>A(O6P|)b;:ptywHevg,}Wz;qK{R=1{~Ph6');
define('SECURE_AUTH_SALT', '/uLQq~>Tpqr*=cR81IS&;7.gD#WD#.%e-d%lnb`d!vB:v6cbZp}8y:<MQT|Ma3H%');
define('LOGGED_IN_SALT',   '9_Sx<_}}3xl=G3%8Mi{y;q}4roT.:)C3Lr}0xQw5&L;J7#O iq.Z7wv}S3e$G!Nr');
define('NONCE_SALT',       '>_BLY(Q.[m9qWKKPHF;NiPseov79D_3>exf4VK;Q+U(&UyzMrcwW=%fL+[zoO3jV');

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
