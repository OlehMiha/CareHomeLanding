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
define('DB_NAME', 'wp_carehoz_db0');

/** MySQL database username */
define('DB_USER', 'wp_carehoz_0');

/** MySQL database password */
define('DB_PASSWORD', 'bhXFJ72iKBhjQF51');

/** MySQL hostname */
define('DB_HOST', 'sql585.your-server.de');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VEM44al7vjVL/prjrpciyGjiMie0uMkIKXS8QqzSH.OvPLHmr607S07L0dCtKVCw');
define('SECURE_AUTH_KEY',  'kdlIHgqKFZs9extJkqJmvUSgp68ERrAGdUlQ3HlBr0zFdtm46BaFK5nElNqqwQVJ');
define('LOGGED_IN_KEY',    'tFjKtR4KjjhUUmBYuOH913bkwGVMS8PORLEFegR8nTf8aNCC.swo0tR8pdCBVEwu');
define('NONCE_KEY',        '96EKsbw/eg39m2gJKdSKOY7VW9NAk8C/KGIEs9ZB24GZWuWgMctLFaKaKolZwVsM');
define('AUTH_SALT',        'jRiPHn7XlbN22UAzsvknnzj9U79jbdqFdFpqD3br1PPe539pUbezYhgNE.JOqUda');
define('SECURE_AUTH_SALT', '7/BRcX7olJJmq6ZiwBFtSSD1WHP68kmx5/9C0WG6/RSPtlmYjhC7rh9G/FTyeJaS');
define('LOGGED_IN_SALT',   '.oeBF3u0rQNUqLVtfvDN/VR3isdrXzNGpbmcGRJGl8zZr001Ju31TrMPa9qUxxnu');
define('NONCE_SALT',       'M8Xl04F42XVV9veGAt68i0IqeSEJ7t5/0ElPlOD5FMy3.q3asXXhAglEPhlYpgyG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
