<?php


namespace Sflightning\Contracts\Concurrency;


use Sflightning\Contracts\Concurrency\Promise\LightningPromiseInterface;
use Sflightning\Contracts\Constante\Concurrency;

interface ConcurrencyManagerInterface
{
    /**
     * Execute asynchronously the given array of promise
     * This method is non-blocking
     *
     * @param array<LightningPromiseInterface> $promises
     */
    public function executePromises(...$promises): void;

    /**
     * Execute asynchronously a given promise
     * This method is non-blocking
     */
    public function executePromise(LightningPromiseInterface $promise): void;


    /**
     * Wait until the given promise is resolved or rejected
     * This method is blocking
     */
    public function waitForPromise(LightningPromiseInterface $promise, int $timeout = Concurrency::PROMISE_WAIT_INFINITELY): void;
}