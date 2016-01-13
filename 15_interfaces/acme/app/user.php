<?php

namespace acme\app;

abstract class user {
    /**
     * @var string
     */
    protected  $email;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var boolean
     */
    protected $isAdmin = false;

    /**
     * All properties that can e set directly
     * @var array
     */
    protected  $fillable = array ('email','password');

    /**
     * All properties that can be goten directly
     * @var array
     */
    protected  $accessible = array('email','password');

    /**
     * class configuration only
     * @param array $params
     */
    public function  __construct(array $params = array ()) {
        if (count($params)) {
       foreach ($params as $key => $value) {
    $this->$key = $value;
}

/**
 * directly set inaccessibke
 * @params string $nama
 * @params mixed $value
 * @return void
 */
public function __set ($name,$value) {
    //Do not set if not fillable
    if (! in_array($name,$this->fillable)) {
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
public function __get ($name) {
    // DO not return if not accessible
    if (! in_array ($name,$this->accessible)) {
        return NULL;
    }

    return isset($this->$name) ? $this->$name : NULL;
}

/**
 * Return accessible properties as a json object
 * @return string
 */
public function __toString () {

    $data = array();

    // Only add property accessible
    foreach ($this->accessible as $key) {
        $data[$key] = $this->$key;
    }

    return json_encode($data);
}

/**
 * Log in a user
 * @return string
 */
public function login(){
    return 'Logging in a user ...';
}

/**
 * Log in a user
 * @return string
 */
public function logout(){
    return 'Logging out ...';
}

}
