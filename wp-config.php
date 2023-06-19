<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'malkerta' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J[Drus,CibaaP>,]1me]512+)id&MaRlNc{PS4s ,W{yJ0~~b-5vp@AcH7KA_E&M' );
define( 'SECURE_AUTH_KEY',  '&EW_Q3g_I %%2&@Uw{P$e|abhs`/:tVJeAbOGKU;_:5z<Y=t]?v;`r4+?8py1r=q' );
define( 'LOGGED_IN_KEY',    'LBTOZ0MTu3kBTIj%e<Gs~-1!p:FW{I%7b*US}}g:e4`cN(m}}dQyr- c?EKP:k,j' );
define( 'NONCE_KEY',        'k~&!USSv$k[(qaqV0#R@`sU[ z?KHGtdq{+2Lg,m2vgTGGQpA)7FuGV{9g^;WS[t' );
define( 'AUTH_SALT',        'HaAJna( lv3FMq#iiR~srV4DzZ.Q]K_0(|Tg1/CH|3GN%7WU2SfYOfS{@]9%J8cg' );
define( 'SECURE_AUTH_SALT', '`SbzYwG-|#Q5[}[qFwuTmP$Rq^zwO?0=_Mq{}PnSM82JAD^y>RT!|n,gPNbl`j44' );
define( 'LOGGED_IN_SALT',   ' C=QXLB6N*]17J4MBPm24-I=G[lIfR AJ-szCrK)?j>gBT;YY|bc}tp)OwIA9`LU' );
define( 'NONCE_SALT',       'EF6Ax4K/dHU$h^2xJt@pr0&p:pb5<[5?oyaj0.pxZZO[PnA_wdpKS(CjlEqhS]YN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
