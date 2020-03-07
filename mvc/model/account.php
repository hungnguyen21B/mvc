<?php
class Account
{
    public $id;
    public $username;
    public $password;
    public $role;
    function isRole(){
        return $this->role;
    }
}
