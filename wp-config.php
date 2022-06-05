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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'hamada' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b-TdUCZlUEhgg_]7' );

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
define( 'AUTH_KEY',         ':Y(rAc<t,4BWj}5eDV1mOIc5( 3t[kNOsLU04:zd#=uD=UJ*kz3VDJ&LK3>ttkrC' );
define( 'SECURE_AUTH_KEY',  'hD SQnPtUPr[c^!>R 1L M}Kkv!Mf?{PR(C67NpIRp<lI5BJQ!qcF=qXqs|,_#, ' );
define( 'LOGGED_IN_KEY',    'c9kHXJ*mHd{OOwm]13:+3[n^0CdR4!z&nW/~y!HFZ>/;}NeA$,d?X5-bQ9`#Xg-(' );
define( 'NONCE_KEY',        '<.&>~AGINk>UiiR=._k(|9YUZhGp;(9-:%md{Ood|dDd#Jt`ox6ivsw6e4U4n%%x' );
define( 'AUTH_SALT',        '=mUiedF5D{&){$RhKjulG=4WIT|[d(djy>pKJxHpdU}5%=dKt`_&wyBNjdc;@{]a' );
define( 'SECURE_AUTH_SALT', '0<7VA1*{UCGy<GA<OtcT4kTRk!O^M*yz;mg@^phPc5xH-Wl>(gVN;^6K(*6Pc*HJ' );
define( 'LOGGED_IN_SALT',   ']{=:E$?F=Y.w2(/htB*TZN@.b9yp%<lC;_%aT9KJK8P9!(8>]b#ba`rM*&ZtxykY' );
define( 'NONCE_SALT',       ';q8RbS/*DPN$s|LuO2=6uJmp7YwsVDEb,SWR+QP;H+Z&sM+z60;khwr44{2:jZ4M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Ah_';

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
