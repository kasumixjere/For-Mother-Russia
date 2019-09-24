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
define( 'DB_NAME', 'kups' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+ >S+))jjF<(Q.Ucvr7dft-|?:82 ~}?]][`k>zSBngw>Fo*z-f-2a`ykCeDNTEN' );
define( 'SECURE_AUTH_KEY',  '{.be:bF[2-)(@l2L_KIZ$-`>T-LTZ`#CqC 2ar#~qg^u.+$<b}s~;kHZ({}L <=3' );
define( 'LOGGED_IN_KEY',    'S28X5FiCZIU;P,mpInuBJH*w@tM-[B=0WFiCK^m3~%V4w3|qXCegMMF~Jy(/oz&/' );
define( 'NONCE_KEY',        '=Dg)jd]7[$0`XYze~eKPzstG~#WB-w;Ywk9eLE:$<Y63K>M2ule`m5pf|`;GnD6d' );
define( 'AUTH_SALT',        'tM[q(f_$0 |y.UF:[AfGb(iJ$m:2W|Z:483*!l0(P8.i>xXNy9^X}Z_1~J0@JQ(}' );
define( 'SECURE_AUTH_SALT', '^e0SANF!>@}6J_l`q#$.-C]9mN%Puu.n|nv%F-dTCj]#vi-:Li_b5[jix);[RMnc' );
define( 'LOGGED_IN_SALT',   '.ts4O)hn*%8X3.=A3O|Y0<mjh1quA6amu]n?aC2WXZaY.wwhX V84>bLf6`l6v|X' );
define( 'NONCE_SALT',       '~t3ZST lG0~xbl4o&zNFXhG<:4*bsx~4GaHt%PcX88 {TpE~R|ATf2y`<br[U-lK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ku_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
