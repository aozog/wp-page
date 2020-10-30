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
define( 'DB_NAME', 'wp-page-database' );

/** MySQL database username */
define( 'DB_USER', 'aozog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BCkg3R53tmPO0NQN' );

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
define( 'AUTH_KEY',         '3l2lsQ^H%y7WqB!wOC.JV_nN:9DoifgE^_aC(mDPB!]4jrU=&DTlz4+hhLJi7vvM' );
define( 'SECURE_AUTH_KEY',  '(v|+0Ct=?pcoMNuT>mW[U]~`[qWf-vG,=[9*[Ar5ur0T#r>,R9ZzE}Q?i#]}&BhJ' );
define( 'LOGGED_IN_KEY',    ';U]d/Ac>2H6p>q5sL`kQW`6iDqI)j<i}9,CQHqexxNfq|m>$?YIBW c_#%UBKi,|' );
define( 'NONCE_KEY',        'Ng}]`3i_rsu@eFeZaLS]<ZEf3)]};_/<<;[%Yr+x.X+n|j6d1<A-==~79UHd#%QE' );
define( 'AUTH_SALT',        'j~%cv4!b~&~5i&n=e]8Jz<`4-%evqI4O#xZJ~=9uF(6(CE(!dS_DJ$yQ!RBOC,bM' );
define( 'SECURE_AUTH_SALT', 'r8-~o/H9y|MW7+lg#E>z6Pd;nInSo g|9BHV9|U_MDc,;_VlB4J1C99$J!=_7Y>/' );
define( 'LOGGED_IN_SALT',   '*,Ybh}em!$E:qCJ`OhBc3QR1(^ +CNpNPe{]3nx`vJzr|IWwyK?DNa,GBGwG,L9)' );
define( 'NONCE_SALT',       '@P)W=|atsjjwxb#(LhTCYfmyWbrR#FznQrQ50l7utJ$r9XV:[|QV)7)]h,9-~x0N' );

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
