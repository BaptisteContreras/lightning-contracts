<?php


namespace Sflightning\Contracts\Event\Swoole;

use Sflightning\Contracts\Event\LightningEventInterface;

/**
 * Event triggered on Swoole Server "Task" event
 */
interface LightningTaskEventInterface extends LightningEventInterface
{
    public function getCallable(): Callable;
}