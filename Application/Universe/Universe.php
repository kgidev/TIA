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

    /* @var int $cycle in seconds */
    private $cycle;

    /**
     * @return int
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    public function __construct()
    {
        $this->creation = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function getCreationTime()
    {
        return $this->creation;
    }

    /**
     * let the universe age one cycle
     */
    public function cycle()
    {
        $this->cycle++;
        $this->debug(__CLASS__ . '( ' . spl_object_hash($this) . ') is  ' . $this->cycle . ' cycles old');
    }
}