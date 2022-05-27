<?php


namespace Sflightning\Contracts\Constante;


final class Concurrency
{

    /**         Properties         **/
    
    public const PROMISE_STATE_PENDING = 0;
    public const PROMISE_STATE_FINISHED = 1;
    public const PROMISE_STATE_ERROR = 2;

    public const PROMISE_WAIT_INFINITELY = -1;
}