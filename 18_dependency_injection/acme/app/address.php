<?php

namespace acme\app;

use acme\app\repositories\AddressRepositoryInterface;

class Address
{

    use \acme\app\traits\Accessible;

    protected $street;
    protected $city;
    protected $addresRepository;

    public function __construct(AddressRepositoryInterface $addresRepository) {

        $this->addresRepository = $addresRepository;

        $this->fillable[] =  'street';
        $this->fillable[] ='city';
        $this->accessible[] = 'street';
        $this->accessible[] = 'city';
    }

    public function Find ($id)
    {
         // Fetch an address
        $this->addresRepository->Find($id, $this);
        return $this;
    }
}
