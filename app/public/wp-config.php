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
define('AUTH_KEY',         'hO5xhS5+HLMk1pETGjDGDOdd05eycjtRT412f46tSMyKD/9XAhqRl7WSbwyNnXHYWYt5LRrIc3wgXpmO6RXDag==');
define('SECURE_AUTH_KEY',  'VGWASRe0Y78e80WytIxM4QpTcZ23sdUXsdsx8lOcg6ZJmtpPdxUUmHMk0mqvWRttfPUa7HmMp96DmXdlgGf8FQ==');
define('LOGGED_IN_KEY',    'fn++JaejBlIIQqXFQAd5rDm0xwbpJA78rPc7ImqtWBvkvSc58A/7x+hHGNqwpef1Hm5tzH8ADl66fV9lxSsD6A==');
define('NONCE_KEY',        'YoHsLDL+aZt4X9JksAC331uRCkgC88bLgObcAB8bJ+RNsv74djdhHbz/mWFlSxjZdzFBGxOdlwgS26WWVvFh5w==');
define('AUTH_SALT',        '/gjbZQIuUH0RsIoCxkqCgL5Ecy3mCP4qm4eRf3iQbk3Ib7Na6yq3523uTB05lDgizNjgzjvIiRUwpcS8X2XmiQ==');
define('SECURE_AUTH_SALT', 'BBYi6U61SvSKZcAm33p6HPODCd567PVRGR3YHg+rynivyeBjfgh4TbMza7uHHXV3mV6XssedjBnxzNCBbOXAVQ==');
define('LOGGED_IN_SALT',   '84rMudpNBZlLIFMHRYQnpb2EDTDCEsCEZXWbvd4OxQp1HjiCwuw3F+/pkCf+vXodtjKpfYXhbejhLj4eBfoCYQ==');
define('NONCE_SALT',       'gKN+Mdv2QmsCDC0kQLbRai3yAKb3EODcgahljlSOd/dCdoK+yonQV15wvRw5sOsZgyoG7RlReChe9Y8+Uurj6Q==');

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
