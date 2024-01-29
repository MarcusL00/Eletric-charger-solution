<?php

//  only allowes for the website to handout session id.
ini_set('session.use_only_cookies',1)
ini_set('session.use_stríct_mode',1)

session_set_cookie_param([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

// checks if we have a session id; if not, regenerate one.
if (!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
} else {
    // if 30 minutes have passed since the last regeneration, regenerate a new session id.
    $interval = 60 * 30;

    if (time() - $_SESSION['last_regeneration'] >= $interval) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}