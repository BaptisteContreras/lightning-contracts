<?php


namespace Sflightning\Contracts\Event\Swoole;

use Sflightning\Contracts\Event\LightningEventInterface;

/**
 * Event triggered on Swoole Server "WorkerStop" event
 */
interface LightningWorkerStopEventInterface extends LightningEventInterface
{
    public function getCallable(): Callable;
}