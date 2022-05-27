<?php


namespace Sflightning\Contracts\Event;


use Sflightning\Contracts\Event\Swoole\LightningFinishEventInterface;
use Sflightning\Contracts\Event\Swoole\LightningServerStartEventInterface;
use Sflightning\Contracts\Event\Swoole\LightningServerShutdownEventInterface;
use Sflightning\Contracts\Event\Swoole\LightningTaskEventInterface;
use Sflightning\Contracts\Event\Swoole\LightningWorkerStartEventInterface;
use Sflightning\Contracts\Event\Swoole\LightningWorkerStopEventInterface;
use Swoole\Http\Server;

/**
 * This interface represents a class that can create event dispatch during the lifecycle of a Sflightning project
 */
interface EventFactoryInterface {

    public function createServerStartEvent(Server $server) : LightningServerStartEventInterface;

    public function createServerShutdownEvent(Server $server) : LightningServerShutdownEventInterface;

    public function createFinishEvent(Server $server) : LightningFinishEventInterface;

    public function createTaskEvent(Server $server) : LightningTaskEventInterface;

    public function createWorkerStartEvent(Server $server) : LightningWorkerStartEventInterface;

    public function createWorkerStopEvent(Server $server) : LightningWorkerStopEventInterface;
}