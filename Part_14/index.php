<?php

class User
{

    private $email;
    private $name;

    public function __construct($name, $email)
    {
        // $this->name = 'mario';
        // $this->email = 'mario@bi.com';

        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        // echo "the user logged in\n";
        echo "$this->name logged in\n";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (is_string($name) && strlen($name) > 1) {

            $this->name = $name;
            return "name has been updated to $name\n";
        } else {
            return "not a valid name";
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

$userTwo = new User('mario', 'mario@bi.com');
echo "userTwo name is " . $userTwo->getName() . "\n";
echo "userTwo email is " . $userTwo->getEmail() . "\n";

$userTwo->login();

echo $userTwo->getName();
echo $userTwo->setName(50), "\n";

echo $userTwo->setName('ben'), "\n";
echo $userTwo->getName(), "\n";
