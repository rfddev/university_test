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
define('AUTH_KEY',         'ehqa/W/TZWWcnIwLld/BGyGF1MdOfIqknfWdJMFb0s44BTKUJ1djfu+/sOZ7x4d9lYBwPrskqMr4Ai2n2arGDA==');
define('SECURE_AUTH_KEY',  '/8rcLACt9v6d15l2ba0ljtcIxB6Sah4X57f3ErxDbns3sUTaKWMi6T7vTc83M3e7vkR4hYTDUoukRsV4QgEyig==');
define('LOGGED_IN_KEY',    '26XBiz89SAo7llD0pxmv/8esxKQyBCuCBeXbmEWLbWTMp6egoMEFl2cWSaTgS1VzW7nRDoTpHsN9Bltp3bawkg==');
define('NONCE_KEY',        'XqNORSVpfui0TEZq+prlCrBxgCije6svh+2vAtpwafZFD/ly2/8uyHgr4hpOa8mak0rGBPdWp3h9dWV1wrPwag==');
define('AUTH_SALT',        'ZWI1bflGabh9ZEN3QeiEkaBaFf05SRuN/VuWPcBVRPiMBwfSRgKNw/Zf1W5LYfIDSCVPACSX8BisFti/QJXLkg==');
define('SECURE_AUTH_SALT', 'hW51rlpRyHIAySKuwdlrwuZQpgm4hUP7J0IVWsIVNy0ldSVVZwg7LLvCIFxgT9ZTUatCE09RI68m5FhUJ1rtvA==');
define('LOGGED_IN_SALT',   'htdogYTmC+66R39/x9XzoiWuHbHWE5Yic6OvWrF9WDOqpZAXiomd0foR5ZN+OpfZaRomCJVu26OOJPnkBFKUQg==');
define('NONCE_SALT',       '107p3vNobMq1hxeFUPxdmpmypf46lYvdWxDlR7q22RGDzo0wG0xov1liic0vEUWRu7XM9GSGmrdJYk5tm+G4PA==');
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
