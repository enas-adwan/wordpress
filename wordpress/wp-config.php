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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '[C??hCQ#GW+z:]Q%yf`(UgjG.KsN_*5j*^`d_Wp|bgrcfJ<){nwcL5S,,eE@>-1g');
define('SECURE_AUTH_KEY',  '{&27q9|iBBZdRDd b`HA^lm$&QRX*;<>3nBBPVHW`%])36})UA52Xt7}mYrb<KGW');
define('LOGGED_IN_KEY',    '#Mx(A<W*uD|~?1kI.+T5o|%gi5l(1lHPtM^R3hLhx-WMajeQN#,w{>UR)ru]My)%');
define('NONCE_KEY',        '({qQvb >=)@vz>0*$F|A*]5s#CZSeM(:`:pGS,c&t AxR6f:;hml4UcrZg]=/?-y');
define('AUTH_SALT',        'qHR.yf+Dq(x!6o4m3 u2|MTS!7-M!I8R)Tb0`E+y;IgI#WY8nob_NI4MbWRpM[NV');
define('SECURE_AUTH_SALT', '{V%1-+E#DJ9e-{f<imu23y=U52{^S[/4mHYoePql%sYIqyv{0Q*=,#){QS:6C1wK');
define('LOGGED_IN_SALT',   'dmQdq)Xm}.B4LmA7g3;_/;jRuBF=1[/OLl%G]OQ[om?_a*uaDA?2(SX^e2rPY2tv');
define('NONCE_SALT',       'L6sB}*rwX|Hpj6/B=M&W}/69,!}utUWb:&>enI^R~q;i)^HFi`*yt#X_YMA-O;yw');

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
