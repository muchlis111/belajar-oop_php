<?php

namespace acme\library;

class user
    {
        /**
         * A private property or method id only accessible from the class itself
         */
        private $foo;

        /**
         * A protected property or method is accessible only from the class
         * itself AND form it's childre class
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
         protected function login(){
             return 'logging in from user class ...';
}
    }