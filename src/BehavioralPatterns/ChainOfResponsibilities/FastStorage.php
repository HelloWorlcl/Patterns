<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 13.08.2018
 * Time: 23:55
 */

namespace BehavioralPatterns\ChainOfResponsibilities;

class FastStorage extends Handler
{
    /** @var array */
    protected $data;

    public function __construct(Handler $handler = null, array $data)
    {
        parent::__construct($handler);

        $this->data = $data;
    }

    /**
     * @param \HttpRequest $request
     *
     * @return string|null
     */
    public function processing(\HttpRequest $request)
    {
        if ($request->getMethod() === 'GET') {
            return 'Hello in memory';
        }

        return null;
    }
}
