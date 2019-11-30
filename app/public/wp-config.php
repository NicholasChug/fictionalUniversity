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
define('AUTH_KEY',         'F1tV8ZmxP+gct1l/2Lu5s2sBuNapzZr9RXJpVgTkSPiRU4/6qt4KPd78Gm5+mUYw/gsHsT3kSuAopkoXefBtwA==');
define('SECURE_AUTH_KEY',  '9kMzX4HZTaWPH+ZC1UPwdl/BubUJuoO0xZDb7Y02mVYDyr7O5E5MjDREbHQzr04KQDhjFOWRCOOTwTrzkECkaw==');
define('LOGGED_IN_KEY',    'NTTSgwZrYSI3LUmMM8V3rrHSO0ADPXgJGK2/Tulg8HvRXEHwGJY6LPlwLmnwjRmf9m+IN+bTOd8gni14lzhYwg==');
define('NONCE_KEY',        'X1e0a9BW22EWtv3QqCVz94Ogr7kVJ4YH2+RTwIVvR70UWZBfB2ytNxRs+2S9H9ta2O0ubTThIrninFv4vgAv+g==');
define('AUTH_SALT',        'Ha3C41hLYfDIxZtWck74KT2k3wvDWKQus/AWei74Rur/3S/TSmPm8+RCp4JLcyMGn2oo1dR+b8ct0w1tApQr0A==');
define('SECURE_AUTH_SALT', 'q/OZqcJda+GWVG8gfXM/DHZgmqS6Whz5TfnwaSBDzbjXmQEWMeYY4Ep3JmosAZTMa5J/Vsg+pplbW/bsM9XZgA==');
define('LOGGED_IN_SALT',   'YCBj2MeDOOOWgQVE4PeeRH/BROV9EsWbxCjGMdJmcBbwp4PSqhfNiPmrCjVCHORhtiV1pd923GFsZbLmri7AZQ==');
define('NONCE_SALT',       'vvduciRS1VHAOXSdyaXpo2tkveTqFPKzYV1cK9YJAoOA610yYPPknJuO3vB4Wum2ag1YTzSSDsFCAPXdWZuCLQ==');

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
