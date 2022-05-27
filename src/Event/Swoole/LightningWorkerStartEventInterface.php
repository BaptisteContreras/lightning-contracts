<?php


namespace Sflightning\Contracts\Event\Swoole;

use Sflightning\Contracts\Event\LightningEventInterface;

/**
 * Event triggered on Swoole Server "WorkerStart" event
 */
interface LightningWorkerStartEventInterface extends LightningEventInterface
{
    public function getCallable(): Callable;
}