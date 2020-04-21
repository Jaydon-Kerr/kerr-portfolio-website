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
define( 'DB_NAME', 'wp-kerr-portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'pcAv;:m>y#[R:K*Iv/4zknAu&&g>:^g.`*eHV ^lrH2WxknQtO8=@(*2)4#!s^av' );
define( 'SECURE_AUTH_KEY',  '%r|fx(3S,X$T/2U>7JNzQu,:}QPd2V^ig(IC5r;QCC?P2-JB4/w(m[.10` qA*1[' );
define( 'LOGGED_IN_KEY',    'FcUGS_[sS6TlZWM^@KXvseh@V0Tx(wAL!o;SZb5O$0O`VPQY%SJD? xc -o/X-Tv' );
define( 'NONCE_KEY',        '~HY,SRd/{3/6qfmwAS@7Ryi:`9T|olkT[Y2[yooPY4tft^:V2)HJ!a`Q ?OJx3<b' );
define( 'AUTH_SALT',        ';9:6>.JI0.x6=M2ap*sLx>-7t Q/>fbbZOk.DYCH{{3Q&Y3_yHKo!QHQBqM2NrNw' );
define( 'SECURE_AUTH_SALT', 'B6tMDCy2iD:yV23^v9vcno H(R7Z>Q_2:Euon5=M(U`Z9yS5t?HgdI>$G9gj?-Ze' );
define( 'LOGGED_IN_SALT',   'Q LsfkuQG{,[b;g1.S_:@aY&A!1^x5C|Dh>m99:AFPmY.FLxodZV8<:07QA!EYa~' );
define( 'NONCE_SALT',       '#->~BX+eFG<7xmpt/]QhaO*p!kwI<JCy@fZ*/{ub&1H}6]4z%0Gi<7+=mm`SW2/;' );

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
