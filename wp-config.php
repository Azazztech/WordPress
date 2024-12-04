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
define('DB_NAME', 'wordpress-35303731a5d9');

/** MySQL database username */
define('DB_USER', 'wordpress-35303731a5d9');

/** MySQL database password */
define('DB_PASSWORD', 'Azaz@143');

/** MySQL hostname */
define('DB_HOST', 'sdb-75.hosting.stackcp.net');

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
define('AUTH_KEY',         'EkD0yvcEabNgUkGAVgbDSZ1XPCKFinYn');
define('SECURE_AUTH_KEY',  'Cq+jiWnnfQc4tnL6l9N8WER5MuC5m9cQ');
define('LOGGED_IN_KEY',    '6hgQ+Cq8t2tusdlRjyHmpQA213Hb+0cI');
define('NONCE_KEY',        'ac0JkwtCOKTcfbieooBwRIzvkMjYFPeD');
define('AUTH_SALT',        '0f2vJ+6g78SYR/tQQA+WH6Zev/77Sj2q');
define('SECURE_AUTH_SALT', 'pKsrVqs2RXUKi9Q1l2GLOs4CFC4lb3Ar');
define('LOGGED_IN_SALT',   '2SRk3zD3wVGwQxfvO6Z1Lw2LDu+ypsqf');
define('NONCE_SALT',       'S53lqWCyELfe0ans2styfVFikX1Dwr3G');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '10_';

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
