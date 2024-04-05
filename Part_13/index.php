<?php

class User
{

    public $email;
    public $name;

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
}

// $userOne = new User();
// $userOne->login();

// echo "userOne email $userOne->email\n";

// $userOne->email = 'hullio@up.com';
// echo "userOne email $userOne->email\n";

$userTwo = new User('mario', 'mario@bi.com');
echo "userTwo name is $userTwo->name\n";
echo "userTwo email is $userTwo->email\n";

$userTwo->login();
