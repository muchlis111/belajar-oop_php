<?php
calss user {
    private $email;
    private $password;

    /**
     * log in a user
     * @return  string
     */
    public function login(){
        return 'logging in with a vengeange ...';
    }
    /**
     * log in user
     * @return string
     */
    public function logout(){
       return 'logging out ...';
}
    /**
     * ser the user's password
     * @param string $string
     * @return User
     */
    public function setPassword ($string)
    {
     $this->password = $sring;
    return $this;
    }

    /**
     * Get the user's password
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * set the user's email
     * @param string $string
     * @return User
     */
    public function setEmail ($string)
    {
        $this->email = $string;
        return $this;
    }

    /**
     * get the user's email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
