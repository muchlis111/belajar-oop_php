<?php

namespace acme\app;

class user {
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected  $password;
    /**
     * @var boolean
     */
    protected  $isadmin = false;

    /**
     * All propertiess that can be set directly
     * @var array
     */
    protected $fillable = array ('email', 'password');

     /**
      * All properties that can be gotten directly
      * @var array
      */
    protected  $accessible = array('email', 'password');

    /**
     *class configuration only
     * @param array $params
     */
    public  function  __construct(array $params = array()) {
        if (count($params)) {
            foreach($params as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    /**
     * Durectly set inaccessible but existing properties, if in $this->fillable array
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function  __set ($name, $value) {
        //Do not set if not fillable
        if(! in_array($name, $this->fillable)) {
            return false;
        }
        if (isset($this->$name)) {
            $this->$name = $value;
        }
    }
    /**
     * Directly get inaccessible but existing properties, if in $this->accesible array
     * @param string $name
     * @return mixed
     */
    public  function  __get ($name) {
        //Do not return if not accessible
        if (! in_array($name, $this->accessible)) {
            return NULL;
        }
        return isset($$this->$name) ? $this->$name : NULL;
    }
    /**
     * return e\accessible properties as a json object
     * @return string
     */
     public function  __toString() {
         $data = array();

         //only add property accessible
         foreach ($this->accessible as $key) {
             $data[$key] = $this->$key;
         }
         return json_encode($data);
     }
    /**
     * log in a user
     * @return string
     */
    public function  logout(){
        return 'logging out ...';
    }
}