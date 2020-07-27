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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'schoolmanagement' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '7ZR1b$h CUs&ELSc/{[ZR`97,Ntov1}SJXZzA[Y[$XX$Dv%v1#%heVC*,uB6w%!u' );
define( 'SECURE_AUTH_KEY',  'JQ*D/l&^wG]!,(HpdzNR!3,xDADbrGol,%RondnQWcHQL=N3n3f>!1e&E_3|i=2P' );
define( 'LOGGED_IN_KEY',    '>e|&tx18V~Ax,{*@2&6CMZUt-Jleo-4f}1I}0WPvALl0o{. >V#sTuOjH,_;%k@8' );
define( 'NONCE_KEY',        'tn!FsoEj`BZD1n2Sf@=ueJ=9!a `[B@awykA}#3>HUp364j[(K_R7m//SVh1DO9a' );
define( 'AUTH_SALT',        '{>8rvo2lS*7#kFWR,wOxaVxiV=jyCZDDtYd|By9&$>rF8&e!U<YnFtN_7(+.#6fz' );
define( 'SECURE_AUTH_SALT', '}QSPM}2Yj=*]s:n!-Mf&V]1v-_{?QiM0+{dNFZm_ }&g}:0Z%)p_+jCd^[c{~^9I' );
define( 'LOGGED_IN_SALT',   '1U^^i_7N+|UY+u:5jOH-:PFW9B5`.%Ws|5b`IEw[6b<)m_FgqEXn]^`HCcfL83+D' );
define( 'NONCE_SALT',       '-{?.0%gGxA?5PVaI2eM+T 5(LK%e4Vf>$;^c#VW]6Qw;>>n2|cCAh<1-n^(df%ZC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
