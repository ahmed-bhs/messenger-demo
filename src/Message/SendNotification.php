<?php
/**
 * Created by PhpStorm.
 * User: ahmedbhs
 * Date: 29/09/18
 * Time: 18:19
 */

namespace App\Message;


class SendNotification
{
    private $message;

    private $users;

    public function __construct(string $message, array $users = [])
    {
        $this->message = $message;
        $this->users = $users;

    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return array
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param array $users
     */
    public function setUsers(array $users): void
    {
        $this->users = $users;
    }
}