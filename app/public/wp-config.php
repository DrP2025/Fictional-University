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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'TXEkuOYx443D/p9fNflOr99iMI2RJipB6TR8M+KrHNJ/85BtdJ5hiofd1B8f9HSYr0/RwegOrxOAVo46FvdkUA==');
define('SECURE_AUTH_KEY',  'MzqTaTFdLHRb0wDmZKrOlroV/leP5LqCnt7quytgiwAkqGb2dFTugJNlRte5vbGOe2xORhJgeBABscPSnWpGIw==');
define('LOGGED_IN_KEY',    'p5flTb4LLA+r6Bkl00ADdsMhR2y7VGQzFqADlei2Yj2Gf+hJ/n8Nfe+3g6qPwO3fW0FzH4OLmlO+Fxj+FAtGBQ==');
define('NONCE_KEY',        'XxglmDKhh57DEqut1bkJYW6ulGWJleIggBiq5ScMxbyjBVIkRzC/wSe7VTnNC9gT15gsOz7fMDZLJFiGJ/3lhg==');
define('AUTH_SALT',        'o8zrRY5K1vy4qNfHE/zDxjtdsTGtiGPpLU4eYm69AQF3FFeW+VUXmDD60vJNyVJ9yQLslyT799s7KSqoUfy99Q==');
define('SECURE_AUTH_SALT', 'lV/KrYg41OsGoh2aRmKRzOU8zwk+V/3qfko2eQV1OFu/vqqcfb8lOU2LJa0uTqC+c8EythWLZN/bTPOFtLGyTA==');
define('LOGGED_IN_SALT',   'ege2pcpmE8FT411TRcU5wXrsivk0+aVMaP2gIj8L+3SwrnGMnbaq4wKH9MkFAi8wJS2fHUwjlYyZBNMsbBtj9g==');
define('NONCE_SALT',       'gr6zznmUM3jHmKnUYa2acepcXN3eLmyIyshs3CkZ0poV4KiiAw8mbL10g5lwgRREkNeKz52EZsp/HkMVUjriMQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
