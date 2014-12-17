<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16.12.14
 * Time: 19:03
 */

$mypid = getmypid();
error_log('ForkerId: ' . getmypid());

$pid = pcntl_fork();
if ($pid == -1) {
    die('could not fork');
} else if ($pid) {
    // we are the parent
    error_log('ChiledID: ' . $pid);
    echo ' ForkerId: ' . getmypid();

    pcntl_wait($status); //Protect against Zombie children
    for ($i = 1; $i <= 2; $i++) {
        sleep(1);
        echo ' Parent-Step:' . $i . PHP_EOL;
    }
} else {
    // we are the child
    echo ' ChiledID: ' . getmypid();

    for ($i = 1; $i <= 3; $i++) {
        sleep(1);
        echo ' Child-Step:' . $i . PHP_EOL;
    }
}
?>