<?php


namespace Sflightning\Contracts\Event\Swoole;

use Sflightning\Contracts\Event\LightningEventInterface;
use Swoole\Http\Server;

/**
 * Event triggered on Swoole Server "Stop" event
 */
interface LightningServerStopEventInterface extends LightningEventInterface
{
    public function getServer(): Server;

    public function getWorkerId();
}