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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'FirstS' );

/** MySQL database username */
define( 'DB_USER', 'kateryna' );

/** MySQL database password */
define( 'DB_PASSWORD', 'popsicle01' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'i)V: dxd=RJghT~O|9UK.+$oL^*^V/m:L, ;&WBq+$E[PfEtM<ny)s Mc,]+!(L0' );
define( 'SECURE_AUTH_KEY',   'H{ak!5$L/U7Hu05;`pk-cM|{-ibcQUX3&_UuQ+OEC2g]ncxpiyF49M:)!AzZ(WfD' );
define( 'LOGGED_IN_KEY',     'DRc.CV{*L~OZK*|ioc`(thJn,3Oj#Mj M;GcD)aSVD[we=*D-[9V9Y}&-{B$z?C5' );
define( 'NONCE_KEY',         '/)<O-<_=9p&wxtN+gP|H{Z@p`wN4gn->My0`=jxKeLEJ?iV`q.sq5xk2P*+q,zM{' );
define( 'AUTH_SALT',         'l(L;qXv{?yfv%tMA*vmT+7iODFZafc%`}2r?UgBxn;Ss#?*z}ytj`^X{;Mc/*S_h' );
define( 'SECURE_AUTH_SALT',  '2ca;O$gL^oRZ.lU|.uk];21nU]g1JNvaZn9@pwV%UV]?ZD`2r%9U+>bZo(ZN1Hdd' );
define( 'LOGGED_IN_SALT',    '(nW2I.u+M8syXf27Z8jW}-3g>* %;P+k>st0$ouV@7D}WIEGFO5+ U6q6-R{Hi}f' );
define( 'NONCE_SALT',        'jQm+g[!beIL*P%ETJ2srEJuGb|`|WtmWaZ+:d +5*l$SJmP5 cPQJm&8/,Jk!!9<' );
define( 'WP_CACHE_KEY_SALT', ':,T:;c*bY{^.}57Va)-;aB%h:cv9DvxK@Rbnb]$+[3&f5wwkS)1_c`7BY!1Cp`9a' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_SITEURL', 'http://dance.com');
define('WP_HOME',    'http://dance.com');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
