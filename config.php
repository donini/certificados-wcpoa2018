<?php

/* Set this if you would like to display errors and warning messages. */
define('DEBUG', false);

/* The title for the generated web pages.
 * You probably want to put the title of your event here. */
define('TITLE', 'WordCamp Porto Alegre 2018');
define('URL', 'https://2018.portoalegre.wordcamp.org/');

/* The logo of the event.
 * It's 120px height if you don't want to adjust the webpage's CSS. */
define('TOP_LOGO', 'img/logo.png');

/* Database connection credentials.
 * See the dbschema.sql file for the required structure. */
define('DB_HOST', 'mysql.donini.me');
define('DB_NAME', 'donini01');
define('DB_USER', 'donini01');
define('DB_PASS', 'certificados123wc');

/* Don't touch this unless you know what you're doing. */
define('BASE_PATH', dirname(__FILE__));

/* Where you want the application to generate the image cache.
 * Remember to create this directory with write permissions. */
define('CACHE_DIR', 'cache');

/* Just leave it. */
define('CACHE_PATH', BASE_PATH . '/' . CACHE_DIR);

/* To know how to adjust the following positions, please take a look
 * at the documentation.
 * https://github.com/viniciusmassuchetto/certificate-generator */

/* Font and location of the person's name. */
define('IMG_NAME_FONT', BASE_PATH . '/font/arialbd.ttf');
define('IMG_NAME_TOP', 270);
define('IMG_NAME_SIZE', 26);

/* Font and location of general description text. */
define('IMG_DATA_FONT', BASE_PATH . '/font/arialbd.ttf');
define('IMG_DATA_TOP', 366);
define('IMG_DATA_SIZE', 20);

/* Font color for the texts that will be placed in the certificate. */
define('FONT_COLOR_R', 0);
define('FONT_COLOR_G', 0);
define('FONT_COLOR_B', 0);

global $db;

require('functions.php');

?>
