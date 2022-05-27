<?php


namespace Sflightning\Contracts\Concurrency\Promise;


interface PromiseStateInterface
{
    public function getPromise(): LightningPromiseInterface;
}