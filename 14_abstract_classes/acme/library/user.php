<?php

namespace acme\library;

class user
    /**
     * A private property or method is only accessible from the class itself
     */
    private $foo;

    /**
     * A protected property or method is accessible only from the class
     * itself AND from it's children classes.
     */
     protected $bar;

     /**
      * A public property or method is accessible from anywhere.
      */
     public $baz;

      /**
       * log in a user
       * @return string
       */
protected function login () {
    return 'logging in from user class ...';
}