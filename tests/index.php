<?php
$unit_vendors = array(
    "../vendor/phpunit/php-code-coverage",
    "../vendor/phpunit/php-file-iterator",
    "../vendor/phpunit/php-text-template",
    "../vendor/phpunit/php-timer",
    "../vendor/phpunit/php-token-stream",
    "../vendor/phpunit/phpunit",
    "../vendor/phpunit/phpunit-mock-objects",
);

$unit_include_path = join(":", $unit_vendors);
ini_set('include_path', ".:$unit_include_path");


require '../vendor/autoload.php';

PHPUnit_TextUI_Command::main();