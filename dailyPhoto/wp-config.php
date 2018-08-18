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
define('DB_NAME', 'i4843717_wp2');

/** MySQL database username */
define('DB_USER', 'i4843717_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'V.bMitBx4g7xGUK7nIX35');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'YYJ9Bx7f5hrhcmJFyd0MesnEmfPFPWQNO9uMPn9L8q5vAzuZbtXnQPZYTfp34K1g');
define('SECURE_AUTH_KEY',  'AAUw54DKvhyhZ2WP4e0LIk16GKuPwdDY8LTF6j5oJ4MhFLGU7M6DAAGCiRst0jK0');
define('LOGGED_IN_KEY',    'VVsqdETyJoOpTk5ULjIs32wBvG7uiNurNdtLoCYFWKPXLpPBvwKBWComJ3htFMZY');
define('NONCE_KEY',        'KUecQtyHpn7OnKBNj2g3q9rTfaD6JBUUCXFlxIUVAAzkN5gmodPTWeSO3pyWyLBp');
define('AUTH_SALT',        'zEMMhPkXhoc9qOx6WB1WqFiKwZMNfpK1JKW9Mzm4UOfgN6ceBNIONGLxnxnrA0w5');
define('SECURE_AUTH_SALT', '6M6EO66Ygyh3Tp8oZcMNKGK64kHqAZ6BcByavGjQWtvHeBjskBBeVOG4NaxVWcBr');
define('LOGGED_IN_SALT',   'm9jjlKghjxOKqf0q2DYOCyVI7TuIxYoP1v7EQ5sI8qseJdBcT1ZoEOIyfURZSm31');
define('NONCE_SALT',       'MEAZ7GXZqmT726A960N0p7O1D7lOWgMKZqLKnMB2L8D4eJQ92TMGMpO0JnfEDQvi');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
