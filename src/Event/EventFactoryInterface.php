<?php


namespace Sflightning\Contracts\Event;


use Sflightning\Contracts\Event\Swoole\LightningFinishEventInterface;
use Sflightning\Contracts\Event\Swoole\LightningServerStartEventInterface;
use Sflightning\Contracts\Event\Swoole\LightningServerStopEventInterface;
use Sflightning\Contracts\Event\Swoole\LightningTaskEventInterface;
use Sflightning\Contracts\Event\Swoole\LightningWorkerStartEventInterface;
use Sflightning\Contracts\Event\Swoole\LightningWorkerStopEventInterface;
use Swoole\Http\Server;

/**
 * This interface represents a class that can create event dispatch during the lifecycle of a Sflightning project
 */
interface EventFactoryInterface {

    public function createServerStartEvent(Server $server, $workerId) : LightningServerStartEventInterface;

    public function createServerStopEvent(Server $server, $workerId) : LightningServerStopEventInterface;

    public function createFinishEvent(Server $server, $workerId) : LightningFinishEventInterface;

    public function createTaskEvent(Server $server, $workerId) : LightningTaskEventInterface;

    public function createWorkerStartEvent(Server $server, $workerId) : LightningWorkerStartEventInterface;

    public function createWorkerStopEvent(Server $server, $workerId) : LightningWorkerStopEventInterface;
}