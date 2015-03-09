<?php

$emailServerSettings = array(
    //gmail SMTP server settings
    'dgmail' => array(
        'Host' => 'smtp.gmail.com',
        'Port' => 587,
        'SMTPSecure' => 'tls',
        'SMTPAuth' => true,
        'Username' => 'user@gmail.com',
        'Password' => 'password',
    ),
    //local FakeSMTP server settings
    'default' => array(
        'Host' => 'localhost',
        'Port' => 2525,
        'Username' => 'fakeuser@fakeserver.com',
        'Password' => 'password',
    )
);