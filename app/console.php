<?php
/**
 * This file is part of Lamirest.
 *
 * (c) OwaisMughal <ovi.mughal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This is a simple file initializing Console Command without
 * any pain. :)
 */

// set to run indefinitely if needed
set_time_limit(0);

/* Optional. It’s better to do it in the php.ini file */
date_default_timezone_set('Asia/calcutta'); 

// include the composer autoloader
//This works when standalone vendor is in app
//require_once __DIR__ . '/../vendor/autoload.php'; 

//This is for use as acomposer package
require_once __DIR__ . '/../../../autoload.php';
// import the Symfony Console Application 


use Commands\LamirestServeCommand;
use Commands\LamiratorCommand;
use Symfony\Component\Console\Application;

$app = new Application();
$app->add(new LamiratorCommand());
$app->add(new LamirestServeCommand());
$app->run();
