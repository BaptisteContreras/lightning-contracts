<?php


namespace Sflightning\Contracts\Event;


interface LightningEventInterface
{
    /**
     * Returns the name of the event
     */
    public function getName(): string;
}