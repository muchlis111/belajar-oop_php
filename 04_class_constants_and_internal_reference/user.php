<?php
class User {
    public $email;
    public $password;
    const MINCHARS = 8;

    public function login(){
        return 'logging in with a vengeange ...';
    }
    public function logout(){
        return 'logging out ...';
    }
    public function logout(){
        return 'logging out ...';
    }

    public function setPassword ($string)
}
    if (strlen($dtring) < self::MINCHARS) {
        throw new Exception('the password should be at least' . self::MINCHASH . 'characterts long.');
    }
$this->password = hash('sha256','$string');
}