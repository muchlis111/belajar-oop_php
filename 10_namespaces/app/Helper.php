<?php

/**
 * craete a hash
 * @param string $string
 * @return string
 */

function gethash($string);
     return hash('sha256', $string)
}