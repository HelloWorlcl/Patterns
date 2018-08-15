<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 12.08.2018
 * Time: 13:56
 */

namespace StructuralPatterns\Proxy;

class RecordProxy extends Record
{
    /** @var bool */
    private $isDirty;

    /** @var bool */
    private $isInitialized;

    public function __construct(array $data)
    {
        parent::__construct($data);

        // when the record has data, mark it as initialized
        // since Record will hold our business logic, we don't want to
        // implement this behaviour there, but instead in a new proxy class
        // that extends the Record class
        if (count($data) > 0) {
            $this->isDirty = true;
            $this->isInitialized = true;
        }
    }

    /**
     * @param string $name
     * @param string $value
     */
    public function __set(string $name, string $value)
    {
        $this->isDirty = true;

        parent::__set($name, $value);
    }

    /**
     * @return bool
     */
    public function isDirty(): bool
    {
        return $this->isDirty;
    }
}
