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
define('AUTH_KEY',         'BNf09VHOy8feqLd1BwnMfgv8mqw3VhekmjO2eLqzwWO/1OojgwmdRo4JhCL1aEmqr9C+ZzkGZQZ3baBW47Jiuw==');
define('SECURE_AUTH_KEY',  'pqohHVoLtWFsD19Hxl30kgjyZgJmW89uTgdWSvwCMDeRujxauylPBLf9TDuYfw/+ulV2HxVNRR/ej5PmHpwmUQ==');
define('LOGGED_IN_KEY',    'gZSvoYuWr1W97r4asCcWCracNyQnsawsk+83oQUOpn13uetZpO3CvUkYeQhqqmmIFRVXROi0Re22DmXPjWWhIg==');
define('NONCE_KEY',        '26bF3RdVN0XQVmf6cezCtOtI2JmjlY0Xo7WxSzDHMxQ2kP5f8xxl8YMJeh9Fu/SZjrp2XBjhWXUdFLIUfDl8Cw==');
define('AUTH_SALT',        'P4lvCO+TQ720QJHUXzY/4CAyMI3GSiR3EK4zFeN2lUyluyQN+Q5VWX439vl60gjJWn4kXb8elyu6XQlbj0Coig==');
define('SECURE_AUTH_SALT', '3FNKGTz1JjLkzMUSUd7f7WUIUHZWi+45dkAvEi1O1n85nO5qpn/jVOMu1OFXmt7HOCJBQnA7emKBXI4X8Z04ew==');
define('LOGGED_IN_SALT',   'N6oyBlQJAd7YwBzoT8LoE7GkvdNda9tEFizGL33TNRN5w+sdDwFPY3DYZfqjcnNti/jlw3fj5NLr0tDacV+SJQ==');
define('NONCE_SALT',       'xDZWodin0e7okwNvqx1YUyHqcviDNf4MaPlXvbILN6ErJkaISQ+zdAScPZq9H+JCUoHmeFuyLeMsUHIgsEpRyw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('JWT_AUTH_SECRET_KEY', 't]MvC+)Z.l5]|CGADDxrQ|hBY<Jft-N6li7IDLSBB@F.h$!Sx[) ,d9)5>QHC=>8');
define('JWT_AUTH_CORS_ENABLE', true);



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
