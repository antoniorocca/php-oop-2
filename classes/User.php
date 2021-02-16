<?php

class User {
    public $username;
    public $password;
    public $actions;
    public $age;

    function __construct(string $username, string $password, int $actions, int $age) {
        $this->username = $username;
        $this->password = $password;
        $this->actions = $actions;
        $this->age = $age;
    }
}
?>