<?php

class User {
    private string $email;
    private string $password;
    private bool $gpdr;

    public function __construct(string $email, string $password, bool $gpdr)
    {
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->gpdr = $gpdr;
    }

    public function isGpdrValid() : bool
    {
        return $this->gpdr;
    }

    public function save() : void
    {
        echo "User added : {$this->email}";
    }
}