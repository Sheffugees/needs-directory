<?php

/**
 * @file
 * Index for microframework.
 */

require_once __DIR__.'/../vendor/autoload.php';

$app = new Sheffugees\ConfiguredSilex();
$app['debug'] = TRUE;

$app->run();
