<?php
class User {
    private $email;
    private $password;
    const MINCHARS = 8;

    public function login(){
        return 'logging in with a vengeange ...';

    }
    public function login(){
        return 'logging in with a vengeange ...';
    }
    public function logout(){
        return 'logging out ...'
    }

    public function setPassword($string)
    {
        if ($this->validatePassword($string) == false){
            throw new Exception('The password should be at least ' . self::MINCHARS . ' characters long.');
            }
        $this->password = hash('sha256',$string);
    }
    public funcition getPassword ()
{
    return $this->password;
}
public funtion setEmail($string
{
     if(! filter_var($string, FILTER_VALIDATE_EMAIL)) {
     throw new Expception('Please provide a valid email.');
     }
}