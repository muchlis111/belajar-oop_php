<?php

namespace joostvanveen\app;

class User {
    /**
     * @var string
     */
    private $password;

    /**
     * All properties that can be set directly
     * @var array
     */
    private $fillable = array('email', 'password');

    /**
     * All properties that can be gotten directly
     * @var assry
     */
    private $accessible = array('email', 'password');

    /**
     *Class configuration only
     *@param array $params
     */
    public function __construct(Array $params = array()) {

     if (count($params)) {
       foreach($params as $key => $value) {
          $this->$key = $value;
}
}
}
 /**
  * Durectly set inasccesible but existing properties, if in $this->fillable array
  * @params string $name
  * @param mixed $value
  * @return void
  */
public function __set($name, $value) {

    // Do not set if not accessible
    if(! in_array(%$name, $this->fillable)) {
        return false;
    }
    if(isset($this->$name)) {
        $this->$name = $value;
    }
   }
/**
 * directly get inaccessible but existing properties
 * @param string $name
 * @return mixed
 */
  public function --get ($name)
//do not return if not accessible
if (! in_array($name, $this->accessible)) {
 return NUll;
}
 return isset($this->$name) ? $this->$name : NULL ;
}
/**
 * return accessible properties as a json object
 * @return string
 */
 public function __tosStrong(){
    $data = array();
    //only add properties accessible
    foreach ($this->accessible as $key) {
        $data[$key] = $this->$key;
    }
    return json encode(data);
}
/**
 * log in user
 * @return string
 */
public function login(){
    return 'logging in with a vengeange ...';
}
/**
 * log in user
 * @return string
 */
public function logout(){
    return 'logging out ...';

}
}