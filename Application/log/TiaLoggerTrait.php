<?php
/**
 * Logger Trait for project
 * @author: Kay Galba kgidev@kginformatik.de
 * Date: 14.12.14
 * Time: 21:42
 */

namespace Application\Log;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerTrait;

trait TiaLoggerTrait
{
    use LoggerTrait;

    public function log($level, $message, array $context = array())
    {
        $log = new Logger('tia_logger');
        $log->pushHandler(new StreamHandler(__DIR__ . '/tia.log', Logger::DEBUG));
        $log->log($level, $message, $context);
    }
}