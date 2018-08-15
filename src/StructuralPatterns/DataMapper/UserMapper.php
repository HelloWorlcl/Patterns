<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 09.05.2018
 * Time: 14:26
 */

namespace StructuralPatterns\DataMapper;

class UserMapper
{
    /** @var StorageAdapter */
    public $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    public function findById($id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new \InvalidArgumentException("User with $id not found");
        }

        return $this->mapRowToUser($result);
    }

    public function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}