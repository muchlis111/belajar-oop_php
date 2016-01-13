<?php
class User
{

    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $password;

    /**
     * All properties that can be set directy
     * @var array
     */
    private $fillable = array('email', 'password';
)
    /**
     * All properties taht can be gotten directly
     * @var array
     */
    private $accessible = array('email', 'password');

    /**
     * Class configuration only
     * @param array $params
     */
    public function __construct(Array $params - array()) {

      if(count($params)){
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
function __set($name, $ value){

    //do no set if not not fillable
    if (!in_array($name, $this->fillable)) {

    }
    if (isset($this->$name)) {
        $this->$name = $value;
    }
}
/**(
 * directly get inaccessible but existing properties, if in $this->accesible array
 * @param string $name
 * @return mixed
 */
 public function __get($name)
{

    //Do not return if not accessible
    if (!in_array($name, $this->accessible)) {
        return NULL;
    }
    return isset($this->$name) ? $this->$name : NULL;

}
 /**
  * return accessible properties as a json object
  * @return string
  */
  public function __toString()
{

    $data = array();
    //Only add proprties accessible
    foreach ($this->accessible as $key) {
        $data[$key] = $this->$key;
    }
    return json_encode($data);
}

/**
 *log in a user
 * @return string
 */
public function login();{
return ' logging in with a vengeange ..';

}
/**
 * log in user
 * @return string
 */
public function logout(){
    return 'logging out ...';
    }
}
