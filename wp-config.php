<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

define('WP_MAX_MEMORY_LIMIT', '512M');
define('WP_MEMORY_LIMIT', '512M');
define('AUTOSAVE_INTERVAL', 1800 ); 
define('WP_POST_REVISIONS', 0 );

/** The name of the database for WordPress */
define('DB_NAME', 'krovcent_pol5new');

/** MySQL database username */
define('DB_USER', 'krovcent_pol5new');

/** MySQL database password */
define('DB_PASSWORD', 'zi7ss172');

/** MySQL hostname */
define('DB_HOST', 'krovcent.mysql.ukraine.com.ua:');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#Pf)7N@T(t3a&y^XUICAz%Z)TV4wT5zL6hqR(vDKqRRpWwv@hjjs%*mtTtKQ7lp0');
define('SECURE_AUTH_KEY',  'BGoYAdkK3u))^e@!UYC$ZJl%DDl7qoaZpjc)zEm##r$snmMh2fiqrjH7gS!@JIzp');
define('LOGGED_IN_KEY',    'dKYyJdCGxf1!%FJwugG0!M4HCi22X*#ghoSe$x7LI%(KXvp@LeAZwIIHpik5!tLP');
define('NONCE_KEY',        '!SAVcEcwFQP5d@&gogKzN0QakIW^Ekqh3W!VBe^%S39!F@W%LXvv9Js82DONcX%v');
define('AUTH_SALT',        'SU$QQ5DxRMTe@(zK7i*kE@DQl6h*tTzbsjF04W$MolVmLbcVYyGzK^f^%!QP0(D8');
define('SECURE_AUTH_SALT', 'kx)(mb1@Z$fFXZMjqqX0V!A3Zv2CgCyfFUs8O8q889fP%O9zpW4Bu6qFr8MBMR8F');
define('LOGGED_IN_SALT',   '4RX8&ig)jssJInyGyjpB#Ek!4tUKsMpyiPr1j(FH04dqGbqOX2&&JaBl*8BTfvVY');
define('NONCE_SALT',       'VP77nTK!PoqLIwwrcF0tRWPKaMVSor0VB5bM$$IT4(uc&HEQ4Dmi))!ZBrnY4G5d');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'ru_RU');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
