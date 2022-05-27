<?php

namespace Sflightning\Contracts\Concurrency\Promise;

interface LightningPromiseInterface
{
    public static function buildFromCallable(callable $taskCallable): self;

    public function getTask(): callable;

    public function getResolveCallback(): callable;
    
    public function getCatchCallback(): callable;

    public function getFinallyCallback(): callable;

    public function then(callable $resolveCallback): self;

    public function catch(callable $catchCallback): self;

    public function finally(callable $finallyCallback): self;

    public function getState(): int;

    public function isFinish(): bool;

    /**
     * @return mixed
     */
    public function getResult();

    public function setResult($result): self;

    public function getUid(): string;
}