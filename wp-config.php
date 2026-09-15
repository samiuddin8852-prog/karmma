<?php
define( 'WP_CACHE', false ); // By Speed Optimizer by SiteGround

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbr22z2zc5lkyv' );

/** Database username */
define( 'DB_USER', 'uqdl2zoazkch5' );

/** Database password */
define( 'DB_PASSWORD', 'sxsnj3smrlgs' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'uHQyoIK>jeSB<}mzqgVGRh-Hu4M3iHL3zD#j*~_ov6bAttvd1yC2l# bdvfJ5e[4' );
define( 'SECURE_AUTH_KEY',   '&El>%Hb$c8PR={}jtC] Pv]?5yJ$n@x2#MYyS(_Oxbx a,_Uuko8sh_)Px0!uc*%' );
define( 'LOGGED_IN_KEY',     '[?$YX$-$lxVoQl+ oXL2*lF?0tv0WX[|B*a7@Y>t3Qk30tBT>fR nEK.E76R,}32' );
define( 'NONCE_KEY',         '&m5tPXZz2Kmn ;#vgOGX(bdz96m(Q!H( Kz^HS3~B5z5neOulS wL`9@+Ua(0Q0Z' );
define( 'AUTH_SALT',         '1pgqlm64^! @3(dR=s8<)}T_1gZ}< 1p`-ACx!)[q~z(`D~ DRhi.:X=3u;/4oi[' );
define( 'SECURE_AUTH_SALT',  'U,d4*iVKDhEZ<s[-x8?</$-~udjJbdS24T!^<7uZp2l3~b2MOtHT.bHU~=/3xxrY' );
define( 'LOGGED_IN_SALT',    'K((/npwv<7f|+*-vpB{~IwNgspT*thu#t@fi_vq$f#r)a{3EAG}WH</P}m!h>1Ng' );
define( 'NONCE_SALT',        '^}[^-lV!2BGz5jn;t)8w-]B]!BPwzoDc`Nq7Uvx^Th|_`g7ajY*rgZAR-h]V{<6J' );
define( 'WP_CACHE_KEY_SALT', '4=]GktQ|D{5(jU-fD~@<)N+g2%~_=_M_yN?R<rl%LRm`M}Co!Rn5MBDPLLCFogZH' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hbl_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
