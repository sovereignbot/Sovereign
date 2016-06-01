<?php

$config = [];

// Database configuration
$config['db'] = [
    'dbHost' => '',
    'dbName' => '',
    'dbUser' => '',
    'dbPass' => ''
];

// Discord Token (Look at https://discordapp.com/developers/docs/intro for more info)
$config['bot'] = [
    'token' => '', // Discord Bot User Token
    'prefix' => '%', // Command prefix. EG: %help
    'presence' => 'beat the human pinãta' // What the bot will be "playing"
];

// Cleverbot user/key (Look at https://cleverbot.io/ for more info)
$config['cleverbot'] = [
    'user' => '',
    'key' => ''
];

// Imgur API Access (Look at https://api.imgur.com/oauth2 for more info)
$config['imgur'] = [
    'clientID' => '',
    'clientSecret' => ''
];

// Wolfram Alpha (Look at https://developer.wolframalpha.com/portal/apisignup.html for more info)
$config['wolframalpha'] = [
    'appID' => ''
];

// Permissions, lists the admin(s) discordID and also the various levels available
$config['permissions'] = [
    'admins' => [
        // Add your Discord User ID here
    ],
    'levels' => [
        'banned', // 0
        'user', // 1
        'guildadmin', // 2
        'admin' // 3
    ],
    'default' => 1 // User
];

// Service Providers, a list of League/Container compatible service providers to extend Sovereign with.
$config['serviceProviders'] = [
    // \YourPackage\CustomServiceProvider::class, // register your add on package service providers here
];

return $config;
