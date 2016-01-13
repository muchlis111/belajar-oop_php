<?php

namespace acme\app;

/**
 * this class extends acme\app\user
 */
class Member extends  user {
    /**
     * log in a user
     * @return string
     */
    ublic function  login(){
    //login in our member using the logic in the arent class.
    $message = parent::login();

    //add some member-spcific logic
    return $message . ' ...set a flag in the online members table';
}
}