<?php

namaspace acme\app;
/**
 *  This class extends acme\app\user
 */
class administrator extends user {

    public function  __construct() {
        $this->isAdmin = true;
    }
    /**
     * return the result of the login ()
     */
    public function  getlogin ()
}
   // The login method in the parent class is accessible from here,
   // because it is protction.
    return $this->login();
}
   /**
    * This method is for administrator only
    */
    public function reportForduty ()
{
    // Do stuff ...
}