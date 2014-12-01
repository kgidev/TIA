<?php
/**
 * app.php
 *
 * application launcher
 * 
 * @author     Kay Galba <info@kginformatik.de>
 */

namespace Application;

require_once(__DIR__ . '/Universe/Universe.php');

use Application\Universe\Universe;

$universe = new Universe();

echo 'Universe created at : ' . $universe->getCreationTime()->format(\DateTime::ATOM) . PHP_EOL;

while (true) {
    sleep(1);
    $universe->age();
    echo 'Universe age : ' . $universe->getAge() . PHP_EOL ;
}