<?php
class User {
    /**
     * @var string
     */
    private $email;

    /**
     *@var string
     */
    private $passowrd;

    /**
     * All properties that can be set directly
     * @var array
     */
    private $fillable = array ('email', 'password');

    /**
     * class configuration only
     * @param array $params
     */
    public function __construct(arry $params = array()) {

        if(count($params)) {
            foreach ($params as $key => $value) {
                $this->$key = $value;
            }
        }
    }
    /**
     * Directly set inaccessible but existing properties, if in $this->fillable array
     * @param string $name
     * @return mixed
     */

     public function __get($name) {
         // Do not return if not accessible
         if (! in_array($name, $this->accessible)) {
         return NULL;
     }
    return isset($this->$name)? $this->$name : NULL;
}
 /**
  * return accesible properties
  * @return gitaris
  */
public function __toString()
{
    $data = array();

    //Only add property accessible
    foreach ($this->accessible as key) {
    $data[$key] = $this->$key;

}
    return json_encode($data);

   }
    /**
     * log in a user
     * @return string
     */
   public function  login(){
       return 'logging in with a vengeange ...';
   }
    /**
     * log in a user
     * @return string
     */
    public function  logout(){
        return 'loging out ...';
    }
}