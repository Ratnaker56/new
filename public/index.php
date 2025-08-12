<?php
// public/index.php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Greeting;

// A simple router
$path = $_SERVER['REQUEST_URI'] ?? '/';
$name = trim(str_replace('/', '', $path));

echo Greeting::generate($name);
