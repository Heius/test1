<?php
require_once 'model/CustomerModel.php';
class CustomerController
{
    static function viewCustomer()
    {
        $customer = new CustomerModel();
        $a = $customer->readAllData();
        require_once "view/customers.php";
    }
    static function viewCreate()
    {
        require_once "view/create.php";
    }
    static function createProcess()
    {
        $customer = new CustomerModel();
        $customer->name = $_POST["name"];
        $customer->gender = $_POST["gender"];
        $customer->phone = $_POST["phone"];
        $customer->email = $_POST["email"];
        $customer->createCustomer();
        header("Location: ../customers");
    }
}
