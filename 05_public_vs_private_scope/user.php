<?php
class User
{

    private $email;
    private $password;
    const MINCHAR = 8;

    public function login()
    {
        return 'logging in with a vengeange ...';
    }

    public function logout()
    {
        return 'logging out ...';
    }

    public function setPassword($string)
    {
        if ($this->validatePassword($string) == false) {
            thorow new exception('the password should be at least ' . self::MINCHARS . ' characters long.');
}
        this->password = hash('sha256', $string);
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setEmail ($string)
    {
        if (! filter_var($string, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please provide a valid email.');
        }
        $this ->$string;
    }
    public function getEmail()
    {
        return $this->email
}
    private function validatePassword ($string)
    {
        return strlen($string) < self::MINCHAR ? false : true;
    }
}