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
define('DB_PASSWORD', 'hi7rr9dp3mp1');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ',.W,}Ax[m+af:y }R:1kvcK)V%&*Uz{]ZXRvL($hGH#V*@U.LSr60Q2B<Qn3>y>w');
define('SECURE_AUTH_KEY',  '=*.*-[.tvB`p)-=i7%00$aaO[45-RHXV ^s,j[BH q,ER&m{OxN!z_l^ :Wuc23n');
define('LOGGED_IN_KEY',    'TZ=UaY_Qcyh}qFNN{5Tq@e5/ 7OQLOy^Jop:&n-@r65&{ ~90$4<lEWSeCK7-85}');
define('NONCE_KEY',        'rFG;BS!YZuWR#dnicmHVm`f|oe1p{%^g%Ggo_JhCAf4|kE%^Ax8FeGS9[<AF9OP.');
define('AUTH_SALT',        ']lXIS[Dw,n`>Zo}NYD&+jth;%Uwkd;vjzwUF1!I;V! j{/5;1{;7n#:~K$gfNgce');
define('SECURE_AUTH_SALT', 'Ag6q*X- A|)3v_Rv#-7>?MCd1>!P:eLM`F#1&ure63LyHo(i|VxMf,Yfz=C:b]z@');
define('LOGGED_IN_SALT',   ':g{uI _BiPhiEC#OC8y~-t}W6T]Q(JOSsMpVQ2b-s$@0)(BV{2p1 >XlL.BpA`;J');
define('NONCE_SALT',       'WZDaZxBZh9>,E~TIOI1>l/V<#.e{^Ri{B&huul`$&%g.2dEmYfg8#sTDU+c.I)5D');

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
