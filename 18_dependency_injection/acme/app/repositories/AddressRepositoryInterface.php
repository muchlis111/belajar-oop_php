<?php

namespace acme\app\repositories;

interface AaddressRepositoryInterface
{
    public function Find($id, \acme\app\address $address);
}