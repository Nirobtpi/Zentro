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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'PIGd4T^_u~Az3yv@l#W8/Gyl7agWd-%OwceB[3r$m%FAf0;{u|bpj_77jM-1j =|' );
define( 'SECURE_AUTH_KEY',   '$HL)03m~>I~@>ZJ$ZVOD>8ww#J&y( ;ianotU=eo:)6Y+qi/0sCh0H}rrknwX8&B' );
define( 'LOGGED_IN_KEY',     'iSEJ8exZY!gF<e(zV,E952`_`nBlb#-IIk^:o~Kb%S68~A+5OR^),B`(dF2W#C!,' );
define( 'NONCE_KEY',         '<BC-y3<_Ay%{ClKxxka0|UpwI)oGT!R5 (|fIih.-) RO(QVa[*qVY>H%-||2a7K' );
define( 'AUTH_SALT',         'w{bGVPprmfd>-=e!ZdsgK3VPHo;,hX;<f#j&6sd$|]cHQ&dd`Mm|4$>&Gm|8._<:' );
define( 'SECURE_AUTH_SALT',  'X q9AkEo[vdUv|pc![Ny5I?s_HBhI [&yq>IlR!WyY7J1#Y]jj(Y$$hxM3M9n$zJ' );
define( 'LOGGED_IN_SALT',    ';:mDTefRx9FH@CrC-zvy)V &#qzMM!kUR7g{$p$u8#`]]w_h/mEzJ_`9_8(1%$Ek' );
define( 'NONCE_SALT',        'h|B`GK?y%dCD Qq+l0!DScnf&s!~fpn1cW#8b,lydgy#yow0os![2;#a*u&3!LWX' );
define( 'WP_CACHE_KEY_SALT', '!S487tyoJdz$u&m8|kk|cj-^n4`JiNVH]3J~mnVvZxPcq55U<>iOPt%{DEc`/GM4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
