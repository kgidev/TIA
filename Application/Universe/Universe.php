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

class Universe {

    const START = 0;

    /* @var DateTime */
    private $creation;

    /**
     * @return DateTime
     */
    public function getCreationTime()
    {
        return $this->creation;
    }

    public function __construct() {
        $this->creation = new DateTime();
    }
} 