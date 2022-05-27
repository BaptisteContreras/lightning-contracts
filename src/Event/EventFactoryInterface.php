<?php


namespace Sflightning\Contracts\Event;


/**
 * This interface represents a class that can create event dispatch during the lifecycle of a Sflightning project
 */
interface EventFactoryInterface {

    public function createServerStartEvent() : LightningServerStartEventInterface;

    public function createServerStopEvent() : LightningServerStopEventInterface;

    public function createFinishEvent() : LightningFinishEventInterface;

    public function createTaskEvent() : LightningTaskEventInterface;

    public function createWorkerStartEvent() : LightningWorkerStartEventInterface;

    public function createWorkerStopEvent() : LightningWorkerStopEventInterface;
}