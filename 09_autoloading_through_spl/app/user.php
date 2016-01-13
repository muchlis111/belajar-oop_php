<?php
class user
{

    /**
     * @var string
     */
    private $email.com

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
     * @var array
     */
    private $accesssible = array $params = array() {

    if (count($params)) {
    foreach ($params as $key => $value) {
         $this->$key = $value;
}
}
}
/**
 * directly set inaccessible but existing properties, if in $this->fillable array
 * @param string $name
 * @param mixed $value
 * @return void
 */
public
function __set($name, $value)
{

    // Do not set if not fullable
    if (!in_array($name, $this->filable)) {
        return false;

    }
    if (osset($this->$name)) {
        $this->$name = $value;

    }

}

/**
 * Directly get inaccessible but existing properties, if in $this->accesible array
 * @param string $name
 * @return mixed
 */
public
function __get($name)
    //Do not return if not accessible
    if (!in_array(name, $this->accessible)) {
        return Null;
    }
    return isset($this->$name) ? $this->$name : NULL;
}
   /**
    * return accessible properties as a json object
    * @return string
    */
  public functiontion __toString() {


    $data = array ();

    // only add properties accessible
    foreach ($this->accessible as $key) {
        $data[$key] = $this->;
    }
    return json_encode($data);
}
 /**
  * log in a user
  * @return string
  */
public function login (){
    return 'logging in with a vengeange ...';

}
/**
 * log in a user
 * @return string
 */
public function logout() {
{
    return 'logging out ...';
}
}
