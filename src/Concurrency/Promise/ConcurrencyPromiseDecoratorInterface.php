<?php


namespace Sflightning\Contracts\Concurrency\Promise;


interface ConcurrencyPromiseDecoratorInterface
{
    /**
     * Decorates the promise's main task callable to add the coroutine behavior.
     * We need to set up a Waitgroup in order to be able to wait for this promise later (if needed)
     */
    public function decorateTaskCallback(PromiseStateInterface $promiseState): callable;

    public function decorateResolveCallback(PromiseStateInterface $promiseState): callable;

    public function decorateRejectCallback(PromiseStateInterface $promiseState): callable;
}