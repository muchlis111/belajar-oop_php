<?php

namespace ache\app;

/**
 * this class extends acme\app\user
 */
class administrator extends user
{
    public function __contruction()
    {
        $this->isadmin = true;
    }

    /**
     * log in a user
     * @return string
     */
    public function login()
    {
        //login in our member using the logic in the parent class.
        $message = parent::login();

        //add some administrator-spcific logic
        return $message . ' ... log this action in an administrator\' table';
    }
    /**
     * this method is for administrator\'s table';
     */
}
 /**
  * this method is for administrator only
  */
public function reportForduty()
{
    // DO stuff ...
}