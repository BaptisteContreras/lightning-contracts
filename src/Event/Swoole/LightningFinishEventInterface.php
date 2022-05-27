<?php


namespace Sflightning\Contracts\Event\Swoole;

use Sflightning\Contracts\Event\LightningEventInterface;
use Swoole\Http\Server;

/**
 * Event triggered on Swoole Server "Finish" event
 */
interface LightningFinishEventInterface extends LightningEventInterface
{
    public function getServer(): Server;
}