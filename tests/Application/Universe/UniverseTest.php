<?php
namespace Application\Tests\Universe;

/**
 * UniverseTest.php
 * 
 * @author     Kay Galba <info@kginformatik.de>
 */
use Application\Universe\Universe;
require_once('/var/www/tia/Application/vendor/autoload.php');

/**
 * Description
 * 
 * @author     Kay Galba <info1@kginformatik.de>
 * @covers Universe<extended>

 */

class UniverseTest extends \PHPUnit_Framework_TestCase {

    /* @var Universe */
    protected $universe;

    /**
     *
     */
    public function testUniverse()
    {
        $this->universe = new Universe();
        $this->universe->getAge();
        $this->markTestIncomplete('TODO');
    }
}
 