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
define( 'DB_NAME', 'db_wp_theme' );

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
define( 'AUTH_KEY',         '+o[1z3`iV @4L7u~1BsaF<:b$=-SCnu?{`s0Z/w^nt-tt(1p,Y5n;u( zf&8f_-,' );
define( 'SECURE_AUTH_KEY',  '&r#Tsb_Qz#$D*0]M<fcx(vZ8JS,AI8&;6,>2eY}+;K03);XpWh:s<(w94~RGqz0n' );
define( 'LOGGED_IN_KEY',    '[5v&`IL8u.nQo; t35y,1pJ(2f!cMwBW=8m#{tUe|W-ACt<TS|VdmW):0Caf4ia@' );
define( 'NONCE_KEY',        '1O[! s~4r-0M,qAMhYEz#v+#TWajHJa/XuAR*{Q%y3) uzBdrESgN+@K9@I%8e!M' );
define( 'AUTH_SALT',        'FVt1*KP6OxY*usJo?7(bXSMgL~Sk_Xie_,B:2)xT/[h!=!+A=UD$>e0TRN)>5e)#' );
define( 'SECURE_AUTH_SALT', 'mrIM7T:d(83K,9OyELIg_(K+7#,yNZ(ksX]Q9`*0G.xCdfPd}kdp}efINpobi2EZ' );
define( 'LOGGED_IN_SALT',   'V/pFihu}{h7*u/H]]zBvD?N?rwug!w(JzdAo9DXkNq+?=a;=v>%^.Eq8$stnkKAa' );
define( 'NONCE_SALT',       '+ GDBSVFnvcw.^Y_rl<Q*=)PcoIL11v$EXV(pdHflMIawF58T8!wzP|[bV.#&1{U' );

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
define('SMTP_LOGIN', 'THANHNV');
define('SMTP_PASSWORD', 'THANHNV@123');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
