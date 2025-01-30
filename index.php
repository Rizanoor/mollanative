<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$base_url = $_ENV['BASE_URL'];

// load file home.php
require __DIR__ . '/app/views/home.php';

