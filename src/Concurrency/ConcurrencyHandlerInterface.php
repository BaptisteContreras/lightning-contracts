<?php


namespace Sflightning\Contracts\Concurrency;


interface ConcurrencyHandlerInterface
{
    public function handleOne(callable $asyncCallable, ...$args): void;

    /**
     * @param array<array<callable, array>> $asyncCallables
     */
    public function handleMultiple(array $asyncCallables): void;
}