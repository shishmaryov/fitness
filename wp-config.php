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
define( 'DB_NAME', 'a0838926_shishmaryov' );

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
define( 'AUTH_KEY',         'U8h3sD@^x$fYSCL5$B%P)Zy[TXCm9#S!HR[:aLGmvt[~JY5VTn C.5G0+6fBpple' );
define( 'SECURE_AUTH_KEY',  'Ld:YxoaS{r1&hA*{RJIqp7{F jwNuNAzi:O$Fo!lskfBG5oX2ftlV%T%d8By65/J' );
define( 'LOGGED_IN_KEY',    'U#n)PETM~cg<HK/?pYYeLMfiR[iFJeL6LqwyVqSlm$G[>j*Mh>S<B_mHyQ,P&j:b' );
define( 'NONCE_KEY',        'f>[NLp=/oQfP?N~ch&MVfIbL+$C}8Y_<@G_J&L[TYHg7n}FH ,|2.m)l$pEWJ9-u' );
define( 'AUTH_SALT',        'ZjNt1}7@@r7z$GC8Q88@,!h0*>)O9)qrfyIG^QUGv2s,EUJF^I7oAUyT#^NBUV@;' );
define( 'SECURE_AUTH_SALT', 'Q^.n0o{RT=OW {H^+vBRt^?z^.?3Q)@SWM~972e(_v]z-3MVaj|#|UH?PT^^=F.{' );
define( 'LOGGED_IN_SALT',   'pPT[]Fv!0+rVUEciFx)Q]r%BkK{}g70^Rg/[n1N51.E~?UWa%t7f]XM,V8$|nI:K' );
define( 'NONCE_SALT',       'sn_jrbv}5w!3rsX2{t_=Ax+F7GU Qv3.>+w*}GWWZCH:>my3D4V_[(Q>E4 @Dr7)' );

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
