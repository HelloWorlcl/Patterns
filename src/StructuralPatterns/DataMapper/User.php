<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 09.05.2018
 * Time: 14:23
 */

namespace StructuralPatterns\DataMapper;

class User
{
    /** @var string */
    private $username;

    /** @var string */
    private $email;

    public static function fromState(array $state): User
    {
        return new self(
            $state['username'],
            $state['email']
        );
    }

    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}