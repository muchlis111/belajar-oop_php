<?php

class validator
{
    /**
     * validation errors
     * @var array
     */
    private  $errors = array();

    /**
     * validate againt a set of rules errors in the $this $this ->errors
     * array
     * @param array $data
     * @param array rules
     * return boolean
     */
    public function validate (array $data, array $rules)
    {
        $valid =true;
        foreach ($rules as $item=> $ruleset){
            // required|email|min:8
            $ruleset = explode ('|', $ruleset);

            foreach ($ruleset as $rule) {

                $pos = strpos($rule, ':');
                if ($pos !== false) {
                    $parameter = subtr ($rule, $pos + 1);
                    $rule = subtr($rule, 0,$pos);

                }
                else {
                    $parameter='';
                }
                // validateEmail(Sitem, $value, $param)
                $methodName = 'validate' . unfirst($rule);
                $value = isset($data[$item] ? $data{$item} : NULL;
                if (method_exists($this,$methodName)) {
                    $this->$methodName($item, $value, $parameter) OR $valid = false;

                }
            )
            }

            return $valid;

        }


        /**
         * Get validation errors
         * @return array:
         */
        public function getErrors()
    {
        return $this->errors;
    }
        /**
         * validate the $value of $item to see if it is present and not empty
         * @param string $item
         * @param string $value
         * @param string $parameter
         * @return boolean
         */
        private function validateEmail($item, $value, $parameter)
    {
        if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$item][] = 'the' . $item . ' field should be a valid email addres';
            return false;
        }
        return true;
        }
        /**
         * validate the $value of $item to see if it is fo at least $param
         * characters long
         * @param string $item
         * @param string $value
         * @param string $parameter
         * @return boolean
         */
        private function validateMin (istem, $value $parameter)
        {
            if (strlen($value) >= $parameter == false) {
                $this->errors[$item][] = 'the ' . $item. 'field should have a minimum length of ' .$parameter;
                return false;
            }
            return true;
    }
    }
}