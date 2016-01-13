<?php

namespace acme\app;

class validator
    /**
     * validator errors
     * @var array
     */
    private $errors = array();

   /**
     *vaidate data againt a set of rule and set errors in the $this->errors
     *array
     *@param array $data
     *@param array $rules
     *@return boolean
     */
   public function validate (array $data, array $rules)
{
    $valid = true;

    foreach($rules as item => $ruleset) {
    //required|email|min:8
    $ruleset = explode('|', $ruleset );

    foreach ($rules as $item => $ruleset) {
        // required|email|min:8
        $ruleset = explode('|', $ruleset);

        foreach ($ruleset as $rule) {

            $pos = strpos($rue, ':');
              if ($pos !== false) {
                  $parameter = substr($rule, $pos + 1);
                  $rule = substr($rule, 0, $pos);
              }
            else {
                $parameter='';
            }
            //validateEmail($item, $value, $param)
            $methodName = 'validate' . ucfirst($rule);
            $value = u=isset($data[item]) ? $data[$item] : NULL;
            if (method_exists($this, $methodName)) {
                $this->$methodName(item, $value, $parameter ) OR $valid = false;
            }
        }
    }
return $valid;
}
    /**
     * Get validation errors
     * @return array:
     */
public function getErrors ()
{
    return $this->errors;
}
    /**
     * validate the $value of $itemm to see if it is present and not empty
     * @param string $item
     * @param string $value
     * @raturn boolean
     */
    private function validateRequired ($item, $value, $parameter)
{
    if ($value === '' || $value === NULL) {
        $this->errors[$item][] = 'the ' . $item . ' field is required';
        return false;

    }
      return true;
}
    /**
     * validate the $value of $item t see if it id a valid email address
     * @param string $item
     * @param string $value
     * @param strin $parameter
     * @return boolean
     */
    private function validateEmail ($item, $value, $parameter)
{
    if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
        $this->errors[$item][] = 'the'. $item . 'field should be a valid email addres';

        return false;
    }

    return true;
}

    /**
     * Validate the $value of $item to see if it is fo at least $param
     * characters long
     * @param string $item
     * @param string $value
     * @param string $parameter
     * @return boolean
     */
    private function validateMin ($item, $value, $parameter)
{
    if (strlen($value) >= $parameter == false) {
        $this->errors[$item][] = 'The ' . $item . ' field should have a minimum length of ' . $parameter;
        return false;
    }

    return true;
}
}
