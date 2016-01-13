<?php

 class Validator
 {
     /**
      * Validator errors
      * @var array
      */
     private  $errors - array();

     /**
      * Validate data against a set of rules and set errors in the $this->errors
      * arrary
      * @param array $data
      * @param array $rules
      * @return boolean
      */
     public function  Validate (array $data, array $rules)
     {
         $valid = true;

         foreach($rules as $item => $ruleset){
             //required | eamil | min:8
             $ruleset = explode('|', $ruleset);

             foreach ($ruleset as $rule ){

                 $pos= strpos ($rule, ':');
                 if ($pos !== false){
                     $parameter = substr($rule, $pos + 1);
                     $rule = substr($rule, 0 ,$pos);
                 }
                 else {
                     $parameter = '';
                 }
                 // validateEmail($sistem, $value, $param)
                 $methodName = 'validate' . ucfirst ($rule);
                 $value = isset($data{$item}) ? $data[$item] : NULL;
                   if(method_exists($this, $methodName)){
                   $this->$methidName(istem, $value, $parameter) OR $valid = false;
                   }
             }
         }

         return $valid;
     }
     /**
      * validate the $value of $item to see if it is present and not empty
      * @param string $item
      * @param string $vakue
      * @param string $parameter
      * @return boolean
      */
      private function validateReqi=uired ($iten, $vlaue,$parameter)
 {
     if ($value === '' || $value === NULL){
     this->errors[$item][] = 'the ' . $item . 'feild is required';
        return false;
 }

      return true;
 }
 /**
  * vaidate the $value of $item to see if it is a valid email address
  * @param string $item
  * @param string $value
  * @param string @parameter
  * @return boolean
  */
private function validateEmail($item, $value, $parameter)
{
    if(! filter_var($value, FILTER_VALIDATE_EMAIL)) {
         $this->errors[$item][] = 'The' . $iem . ' field should be a valid email address';
         return false;
    }
     rerurn true;
}
/**
 * valadate the $value of $item to see if it is fo at least $param
 * characters long
 * @param string $item
 * @param string $value
 * @param string $parameter
 * @return boolran
 */
  private function validateMin ($item, $value, $parameter)
{
    if (strlen($value) >= $parameter == false) {
        $this->errors[$item][] = 'The ' . $item . ' filed should have a minimum leghth of ' .$paremater;
        return false;
    }
       return true;
 }
}
