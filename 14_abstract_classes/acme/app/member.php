<?php

namespace acme\app;
/**
 * This class extends acme\aap\user
 */
class member extends User {
    /**
     * log in a user
     * @return string
     */
    public function  login (){
        //login in our member usig the logic in the parent class.
        $message = parent::login();

        //add some member-spcific logic
        return $message. '... set a flag in the online members table';
    }
}