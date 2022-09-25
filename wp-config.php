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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'SXCSbbX)3_tm,p1`CJMP3M>Oxp;I]ngJC@00^)<gWpoHi;(8q*)!./[N%S=h#),l' );
define( 'SECURE_AUTH_KEY',  '<5H7L}KXUb}kr0FGi,s`3+jG)Bm:g?c<(MQS)xOh %qT:}RPvHtgU{t0$3oT!.l9' );
define( 'LOGGED_IN_KEY',    '>bX<=fQjeuZ;D];@E@yGZ-q.=aY.``L>}3etgHb;$#`D>|S*m1,#2})ygoAb3Aty' );
define( 'NONCE_KEY',        '0/H+83lb12(#rF V-qaQwGY^|,3PqhnYp@842rO5v@UUXd(s*K[vLw.6C6(1A|96' );
define( 'AUTH_SALT',        '3O8YowV;(R[~xWgDlmz96c4).Ix/{DC%T(2hs%w}b2;w>20yl@v<sBCU<^&,&87K' );
define( 'SECURE_AUTH_SALT', 'bbyFC5: 48JL8FA*Fo]7$R.yS2.)3qxx0+*qy}8*P|~^)9&ADe_ql]$f(7%qC~Xm' );
define( 'LOGGED_IN_SALT',   'q+JA+ixS}My-yTIeqL>YRJihL:-}Lk^y`Jd5}V}~=^1bn1/r8u$27?CGrp$[[Qtc' );
define( 'NONCE_SALT',       'Kh1%-AaC_]7E2w_%:Ntj{+Mz>:v ~HOm[M`ed-/oGiMJ-`@(c,q[@ojx(41Z0<Cg' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_ALLOW_MULTISITE', true );



define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
