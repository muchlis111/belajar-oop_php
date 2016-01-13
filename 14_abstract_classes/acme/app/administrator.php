<?php


namespace accme\app;
/**
 * this class administrator extent User {
 */
class administrator extends user
{
    public function __construct()
    {
        $this->isadmin = true;
    }

    /**
     * log in a user
     * @return string
     */
    public function login()
    {
        //login in your member using the logic in the perent class.
        $message = parent::login();

        //add some administrator-spcific logic
        return $message . ' ... log this action in an administrator\'s table';

    }

    /**
     * This method is for administrator only
     */
    public function reportForDuty()
    {
        //Do stuff ...
    }
}
