<?php

namespace acme\library;

class user
{
    /**
     * A private properties or method is only accessible from the class itself
     */
    private $foo;

    /**
     * A protected property or method is accessible only from the class
     * itself AND from it's children classes.
     */
    protected $bar;

     /**
      * A public properties or method accessible from anywere.
      */
    public $baz;

     /**
      * log in a user
      * @return string
      */
     protected function login() {
    return 'logging in from user class ...';
}