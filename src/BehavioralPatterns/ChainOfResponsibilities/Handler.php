<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 13.08.2018
 * Time: 23:55
 */

namespace BehavioralPatterns\ChainOfResponsibilities;

abstract class Handler
{
    /** @var Handler|null */
    protected $successor = null;

    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }

    /**
     * This approach by using a template method pattern ensures you that
     * each subclass will not forget to call the successor
    /**
     * @param \HttpRequest $request
     *
     * @return string|null
     */
    final public function handle(\HttpRequest $request)
    {
        $processed = $this->successor->processing($request);

        if ($processed === null) {
            if ($this->successor !== null) {
                $processed = $this->successor->handle($request);
            }
        }

        return $processed;
    }

    abstract public function processing(\HttpRequest $request);
}
