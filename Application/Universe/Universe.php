<?php
/**
 * Universe.php
 *
 * @author     Kay Galba <info@kginformatik.de>
 */

/**
 * the whole universe
 *
 * @author     Kay Galba <info1@kginformatik.de>
 */
namespace Application\Universe;

use DateTime;
use Application\Log\TiaLoggerTrait;

class Universe
{
    use TiaLoggerTrait;

    const START = 0;

    /* @var DateTime */
    private $creation;

    /* @var int $age in seconds */
    private $age;

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    public function __construct()
    {
        $this->creation = new DateTime();
        $this->debug(__METHOD__);
    }

    /**
     * @return DateTime
     */
    public function getCreationTime()
    {
        return $this->creation;
    }

    /**
     * let the universe age one unit
     */
    public function age()
    {
        $this->age++;
    }
}