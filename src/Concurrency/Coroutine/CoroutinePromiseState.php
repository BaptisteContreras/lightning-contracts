<?php

namespace Sflightning\Contracts\Concurrency\Coroutine;

use Sflightning\Contracts\Concurrency\Promise\PromiseStateInterface;
use Swoole\Coroutine\WaitGroup;

interface CoroutinePromiseState extends PromiseStateInterface
{
    public function getWaitGroup(): WaitGroup;
}