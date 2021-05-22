<?php
return $params = [
    'rules' => [
        'username' => "/^(?!.*[-_]{2,})(?=^[^-_].*[^-_]$)[\w\s-]{3,9}$/",
        'email' => "/^(.+)@(.+)$/",
        'phone' => "/^[0-9]{10,13}$/",
        'password' => "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/"
    ],
    'messages' => [
        'username' => "The username must be 3-9 characters and don't contain restricted symbols.",
        'email' => "The email address entered is not valid.",
        'phone' => "The phone number must contain only numbers and at least 10 characters.",
        'password' => "The password must contain at least 8 characters and at least 1 special symbol.",
        'empty' => "You have posted an empty set of data."
    ]
];