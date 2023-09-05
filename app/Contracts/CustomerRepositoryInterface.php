<?php

namespace App\Contracts;

interface CustomerRepositoryInterface
{
    public function getAllCustomers();
    public function createCustomer();
    public function updateCustomer();
}
