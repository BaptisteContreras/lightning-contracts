<?php


namespace Sflightning\Contracts\Event\Swoole;

use Sflightning\Contracts\Event\LightningEventInterface;
/**
 * Event triggered on Swoole Server "Finish" event
 */
interface LightningFinishEventInterface extends LightningEventInterface
{
    public function getCallable(): Callable;
}