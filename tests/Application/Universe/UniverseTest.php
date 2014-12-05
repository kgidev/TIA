<?php
namespace Application\Tests\Universe;

/**
 * UniverseTest.php
 * 
 * @author     Kay Galba <info@kginformatik.de>
 */

use Application\Universe\Universe;

/**
 * Description
 * 
 * @covers Application\Universe\Universe<extended>
 */

class UniverseTest extends \PHPUnit_Framework_TestCase {

    /* @var Universe */
    protected $universe;

    /**
     *
     */
    public function testUniverseForAging()
    {
        //GIVEN
        $this->universe = new Universe();

        //WHEN
        $this->universe->age();

        //THEN
        $this->assertEquals($this->universe->getAge(), 1);
    }
}
 