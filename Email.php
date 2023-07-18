<?php

class Repository
{
}

class Email
{

    public Repository $repository;
    private $email = 'email';

    public function __construct(Repository $repository)
    {
        $this->repository = Repository::class;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

}

$email = new Email();
$email->setEmail('email-2-2');
var_dump($email->getEmail());