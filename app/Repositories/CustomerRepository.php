<?php
 namespace App\Repositories;
 use App\Contracts\CustomerRepositoryInterface;
 use App\Models\Customer;

 class CustomerRepository implements CustomerRepositoryInterface {
 
    public function getAllCustomers()
    {
        return Customer::latest()->paginate(10);
    }// get all customers

    public function createCustomer()
    {
      return 'Create Customer';   
    }// creating customers 

    public function updateCustomer()
    {
        return 'Update Customer';
    }

 }

?>