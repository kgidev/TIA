<?php
/**
 * app.php
 *
 * application launcher
 *
 * @author     Kay Galba <info@kginformatik.de>
 */

namespace Application;

use Application\Universe\Universe;

require_once('vendor/autoload.php');


const SAVE_PATH = __DIR__ .'/Universe/save' ;

$universe = new Universe();

echo 'Universe created at : ' . $universe->getCreationTime()->format(\DateTime::ATOM) . PHP_EOL;

$cycles = 0;
while (true) {
    sleep(1);
    $universe->age();
    echo 'Universe age : ' . $universe->getAge() . PHP_EOL;
    $cycles++;

    if ($cycles > 1) {
        break;
    }
}

/**
 * load a universe with it's state from filesystem
 *
 * @param string $file
 *
 * @return mixed
 */
function loadUniverse($file)
{
    $universe = unserialize(file_get_contents($file));
    if (!($universe instanceof Universe) ) {
        throw new \InvalidArgumentException('Not a universe: ' . $file);
    }
    return $universe;
}

/**
 * save a universe with it's state to filesystem
 *
 * @param $universe
 *
 * @return string
 */
function saveUniverse($universe)
{
    $file = SAVE_PATH . '/Universe_'. spl_object_hash($universe) . '.ser';
    if (file_put_contents($file, serialize($universe))) {
        return $file;
    }
    return null;
}