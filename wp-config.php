<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nella-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '[W<[p+eokdke@I-]d3`UaY:4s+y,bQC?V$hP!>gw9&%QcZqM[+pRR*,D)K-%qd2M');
define('SECURE_AUTH_KEY',  'W|]P-PwIke$x[<C1a$z(N+e:&=6+K/SBm|3(Wq!xf|4UW>;`}XV!;x4VH=Lw_-de');
define('LOGGED_IN_KEY',    'rM0[GPa@Rl)3BQd|js/EO1Y/|*8H,#$*PVQ).b[SrW!!mD!$joYI%AdtKMrFnI7v');
define('NONCE_KEY',        '&~FkejI|`yN@Mz6k=WRlvg;Md?VY$=djE;_KR(CO*;pYo<*~4@&X3C2w.Q^30tjh');
define('AUTH_SALT',        '9);O+j_;AW?dKx%u+&GmQ6z. &srLGsz7%v1H:rhoByKn<zsz%LHj[Tma>d2Zf%>');
define('SECURE_AUTH_SALT', '.O&G2[C<3L-s;?+*1(zfqfp~R!i<D~7S[qOh-e0gt<f-8lh:PYV-L:/R,)KOv&ww');
define('LOGGED_IN_SALT',   '~9mFA?/L|pf}yBTilATR<qGJ`Ur_1Dm7q(g|EIMp{Zk3gbXc<4dx]A *dzsuAgNL');
define('NONCE_SALT',       'W=?-G(/!Pdr2wFV!Jab&O`;r^z%)R+))O*=<RhPy42lRMP*2W>oc5i!~?#>Fl7|9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
