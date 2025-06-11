<?php
class UserModel {
    private $users = [
        'employee1' => 'password1',
        'employee2' => 'password2'
    ];

    public function validate($username, $password) {
        return isset($this->users[$username]) && $this->users[$username] === $password;
    }
}
