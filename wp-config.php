<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'pWdnaYqZ6q7p4otNDsUE7VeOt/zvvR0/gNm7RcgINrafaWVhSdbaAmnxtv4i12W93pbaw4s83FeRR2ZS43ewcg==');
define('SECURE_AUTH_KEY',  'IBoGPild9/aRvmiGnqNWKVHV2qzC/5GDdGRJl4VbjIZS6BCQ+EEGj7ZjWOZmAGPVMp8PvoGrpJfOtDrqjP1T9g==');
define('LOGGED_IN_KEY',    'PL3O9HseVqsVD3NrRJRi8P9BvRZoL+1IDWluthTPb1Hcl3zKwIT/lbf3w8wvQwmgzg4Ilw2/B6ywo6Hd4X35uQ==');
define('NONCE_KEY',        'pNt4OKLtaBigQjz2Q0mQRLls1FnrQR5pSHgUea1PDJWDUtPGlaVIaKSMtFnnMTDgtLr7ZvzxMVPJoOte2apaUA==');
define('AUTH_SALT',        'SYoYqykh8+eUVhsGFLZWb3/RJb1hFCFcdFaQq+Q5pSDnq6nJyKZWo/OjDRSOdV0VlcwEM99jAA/zvRgdHgXIoQ==');
define('SECURE_AUTH_SALT', 'DtXH9Ttr36jMsg77K707S38Zg3ZojBjtk5NIkq3QfzguanoS/zLfmw+KxNSxO5pOIUZfUTLo/0oYYDfQWOU/qw==');
define('LOGGED_IN_SALT',   'aPkBOey3KFLkCXL5Qv/OoqMGgik2A8vf1lOTKi7bGjbavIraYB1/ltIU9vxVcD/DMb+Hy2cg62tMUZRYecCQGQ==');
define('NONCE_SALT',       'Swz7H0UC7P5mkiKEmLIAplgdF9hTTe53gJoSr6fO5n6/vYyTp7At8mSppvu/gJsd/FU4cHjF7b7RFpaUFk9qQA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
