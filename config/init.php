<?php
$params = require 'config.php';
require '../src/Validator.php';
$validator = Validator::getInstance();
Validator::addParams($params['rules'], $params['messages']);