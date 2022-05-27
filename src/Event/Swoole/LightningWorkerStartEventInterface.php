<?php


namespace Sflightning\Contracts\Event\Swoole;

use Sflightning\Contracts\Event\LightningEventInterface;
use Swoole\Http\Server;

/**
 * Event triggered on Swoole Server "WorkerStart" event
 */
interface LightningWorkerStartEventInterface extends LightningEventInterface
{
    public function getServer(): Server;
}