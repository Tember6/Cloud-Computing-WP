<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio-db' );

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
define( 'AUTH_KEY',         '3[[;%S2-p,MaV|Cj0-U@6ti$mL8A]}::*NYRwTx6*/NXeg0Xivs_}<9?O[Lm2Rp4' );
define( 'SECURE_AUTH_KEY',  'iz+!`y2G;t?UpU^7E3];CJG<v>+(l<G|k%k|x[]=LV[Wsg:UACaE=aL# {NkuD81' );
define( 'LOGGED_IN_KEY',    'EB%fd)}Yb2?b5<GKpZ!NKgC? #`n&V{TYFqm>Db;?hM1);^1T**zWd4m#yw-r(8)' );
define( 'NONCE_KEY',        ')*QQ_X?D3_@[iEC[8/hL{V>eI`okz`K1CW=e3@-;Fn^WO(Q++XQk3Q&q%3onax.=' );
define( 'AUTH_SALT',        'VZeW/|2.H3o{[aTH7[]3t+^)ei:cA,.8*D2n<z3I*Cm)e=#EiOyD12/UAW$pRb5l' );
define( 'SECURE_AUTH_SALT', 'g<{&+Lv}k!bN5ue{/JHLNI8~;Ga?T*d$QEJ#lX@)_#t3zI+$9j@B-C>4i)6($xZ)' );
define( 'LOGGED_IN_SALT',   'rW5G|BGe<?@?lA`bSz1{iV:FXthzcV2M,mu}C0,_IAfgW0[BED!9)`=izyt9T,K*' );
define( 'NONCE_SALT',       ':5c{$ u;yPjI,/3lFA^o}Ydp5#J0R2j=]&n`96jmhst}}Updj6FwW:E[UA^,~(ZN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
