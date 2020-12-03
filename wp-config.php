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
define( 'DB_NAME', 'ceasiu5_wp219' );

/** MySQL database username */
define( 'DB_USER', 'ceasiu5_wp219' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Su@W0p5p7@' );

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
define( 'AUTH_KEY',         'l54czeycgg9jhtkk33f9kcd2sxsgpp4madh7qyodipfxkun82aompa9mpkgzm93m' );
define( 'SECURE_AUTH_KEY',  'ldd9cxkujrgrh7kkh1gl8to0yanrnzsypmgkbuzn31hfmayn6emawbjbydddnirc' );
define( 'LOGGED_IN_KEY',    'tjvagsosc40arrtevqopz3aisgguhawwi90zf7qlvxg5pyl5bryae7n0jqmdafgu' );
define( 'NONCE_KEY',        '0xub95n77cwsdmd8o1byesqqqhkq2annvsetk5hph6tdoflmod7jx7agcbiiaz9q' );
define( 'AUTH_SALT',        'mnehmforxkfvn8kxkthbkailgbuq768szghhkzixf2kfd8ktbpeprfwuwrcttjxs' );
define( 'SECURE_AUTH_SALT', 'cop8htcoykxtpmtgeywgtpbwkcwowken9foj5v2ixzllyd9fsetlegosqikvtkqo' );
define( 'LOGGED_IN_SALT',   'ftftkrmp6qu5jzretxgcen9z041ge9az4lajuyhsfbexnoylae9edw4qo5vreugi' );
define( 'NONCE_SALT',       'klwdarxo4jtjmb8gikhqccejwgw9jl6khwk3c1akjitckuodch3euikmmepawsio' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpld_';

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
