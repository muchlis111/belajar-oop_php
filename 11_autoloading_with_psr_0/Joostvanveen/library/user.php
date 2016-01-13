<?php

namespace joostvanveen\library;

use joostvanveen\app\user as AnotherUser;

class User
{
    /**
     * let's just dump something to the screen so we know library\user
     * is instantiated.
     */
    public function  __construct()
    {
        var_dump(new AnotherUser);
    }
}