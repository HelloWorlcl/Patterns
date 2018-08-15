<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 09.05.2018
 * Time: 14:37
 */

namespace StructuralPatterns\Tests;

use StructuralPatterns\DataMapper\User;
use StructuralPatterns\DataMapper\UserMapper;
use StructuralPatterns\DataMapper\StorageAdapter;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanGetUser()
    {
        $storageAdapter = new StorageAdapter([1 => ['username' => 'Vadim Pintia', 'email' => 'pintya@i.ua']]);
        $userMapper = new UserMapper($storageAdapter);

        $user = $userMapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCanGetExceptionWithInvalidData()
    {
        $storageAdapter = new StorageAdapter([]);
        $userMapper = new UserMapper($storageAdapter);

        $user = $userMapper->findById(1);
    }
}