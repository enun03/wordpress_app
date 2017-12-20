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
define('DB_NAME', 'wp_app');

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
define('AUTH_KEY',         '1cC:#%2k=T[u^okEX(ajEF;23(2bYCbP/&4/Cykb&WL?MD`[5zV KV+4doRQa7a ');
define('SECURE_AUTH_KEY',  'l:Ded8n4`c ^;m)t+d@yofLu.-;hNl:++W3m#N,-vP&1TBf;#^HsHL1|DD9mIu2x');
define('LOGGED_IN_KEY',    '>VfUhl}g&zFwY,cF4w41eB.I&wlENeu|:W(lW9D:$%Lh~*-.72CRW!O5s?xXne[(');
define('NONCE_KEY',        'YK)Mfh8{Q[w;YNyA3DBL,{ZQ|8gHfuy&&|4+gTrY[1pDyJkm?lIdTYpF2.f%_Z=0');
define('AUTH_SALT',        '/~6lYWGXS$Ak{+%t4:JLd>N8=qY?!/(GnZuEiR[AN_2udtiU`1M.B:BvA>>HXv-V');
define('SECURE_AUTH_SALT', 'Lc/];|fc)Ml]9;z,6jeffKq,gTvKX-}Z:Fo]*@dg;MFKUp~^9euqQ28C~0c`#IJF');
define('LOGGED_IN_SALT',   '&`Z3(5J&(Fvh.>v>Vt^AZF*8+2SBy^UULv%U*|eKg$@9!RA))V3B 6}nP_t}El%{');
define('NONCE_SALT',       '4B6?y+7c%w-a22eRCr>u&* z*$|23KE[YY19fM]F/J`&H;{??_zg~JE8l6}wlvMm');

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
