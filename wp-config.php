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
define('AUTH_KEY',         'nIwDtzN/hWAF8jbzhI2zryBbRfw2ZiaPU/YkE0T2jNHcrPB5sOfQ5fEZfRJwQ+rBjxhhtUU7o3KDRgQccF1s+Q==');
define('SECURE_AUTH_KEY',  'bmfKtSsoZbhfuAJcXIb7qPhCE5kHei+Yn6kUaU4IFvRG9vJTRseGLBwhwsVCdj9oCZ1qDmRxy4xssCs10QV3Zw==');
define('LOGGED_IN_KEY',    'qhSwxeM5G5uuDoy/Bil9gQCuM8QZixM+PuVSiPLPcceJQyVb2QnDhu5dhzTaha4ZXNV/RAa3rnybnY0C6ol1yg==');
define('NONCE_KEY',        'bMPPrZO7D5w8jVbWYg/WfBEr8BOY6fOLJEElAsDsMYKC3mJhN1tCWwV4nkVQKozTh3TlMo9kmMd+jcJvRwMaMg==');
define('AUTH_SALT',        'tshHFpRN/UGxH8XffOUpZWIAGfbKQJNlK8uNZ3Bq1xWST6/BwSSYT5dWA+gND8ZWOVQauQ2d/KVgmkbFMZKQRw==');
define('SECURE_AUTH_SALT', 'OZVEJFsQUDmbYbJrEqStbwdRILGWN2vPivVt+o8vToHj8i56ToNpALKsgiZfugL0kpu1VkwqL9RweN7BH9IjGQ==');
define('LOGGED_IN_SALT',   'LDZRBHbPX63N59cR9W9k1gqsqzloN3GQ1MJpH8AnR0ILlRIKrbvsRJbrI4dQapasnuneZkwzvwvc+q9rK25HnQ==');
define('NONCE_SALT',       'UuVmUz4JKrEjFa7QJoxk/FF3y9i1ugO14ebUcnFaozj9alGyXRrY66je0RH1DHuZ+wULNfe7EtxCDa1Pzar3Vw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
