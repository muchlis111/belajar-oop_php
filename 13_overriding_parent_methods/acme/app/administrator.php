<?php

namespace acme\app;
/**
 * this class extends acme\app\user
 */
class administrator extends User {
    public function __construct() {
        $this->isAdmin = true;
    }
    /**
     * log in a user
     * @return string
     */
    public function login(){

        $message = parent::login();
        return $message . ' ...And logging the last login date for the administrator';

    }
      /**
       * This method is for administrators only
       */
    public function reportForDuty()
    {
        //Do stuff
    }
}