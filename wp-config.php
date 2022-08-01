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
define( 'DB_NAME', 'truckSite_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`5Ae<ei{<>!`@v|+(=*,A9qrrO7veo<I/:NdnKW8#ivLy?  #5[aWJD5=MZ5x)9i' );
define( 'SECURE_AUTH_KEY',  'EI?=hGh!b/.kS!^#ag[!/k(XD}%:/m9=PR/<vB!b;#W~BxjVWMZV$n##&+jtygL,' );
define( 'LOGGED_IN_KEY',    '&K G}}J1$WGn.BDxjFl$kSrjG8*VM;=dd{$%9A;;/2tm<XidZL[}rAV)Gx*~EBL;' );
define( 'NONCE_KEY',        '~Ej{{;wqO4v49n}8t59 7ZPq45i#}X8k ]MwS3wtK10?~H_[X:#q)Wgf|Pe#R*fa' );
define( 'AUTH_SALT',        'C>s@[2md+9ja`qzV*R_T^e[O9r`$W?;WkA$w,7aSl2jjOP-k{pdF%69g $!=Azq_' );
define( 'SECURE_AUTH_SALT', 'ZWX?&P~t-]~=O:ElIG&.4yX$b tcfTM?H{QQO^m?}M,eR}q9/b({[gYnV%yug#$m' );
define( 'LOGGED_IN_SALT',   '?{|#eeM =<R-S FLZj&M,@c|W23%q@BM2xR)xwh:cS?j KB>_^3nHejRmf:y`2E3' );
define( 'NONCE_SALT',       ':.i=$c>#HwI@I]4c3Pc,jI#uq989)_uEmQ- )6y,O3+!IO1S/GSzV:.x{F/-0JQ`' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
