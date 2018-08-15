<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 09.05.2018
 * Time: 14:32
 */

namespace StructuralPatterns\DataMapper;

class StorageAdapter
{
    /** @var array */
    protected $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param mixed $id
     *
     * @return array|null
     */
    public function find($id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}