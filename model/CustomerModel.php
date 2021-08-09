<?php
require_once "DatabaseModel.php";

class CustomerModel extends DatabaseModel
{
    public $id;
    public $pp;
    public $name;
    public $gender;
    public $phone;
    public $email;
    public function readAllData()
    {
        $con = $this->connect();
        $sql = "SELECT * FROM customer";
        $result = mysqli_query($con, $sql);
        $this->close($con);
        $customerArray = [];
        foreach ($result as $each) {
            $customer = new CustomerModel();
            $customer->id = $each["id"];
            $customer->pp = $each["profilepic"];
            $customer->name = $each["name"];
            $customer->gender = $each["gender"];
            $customer->phone = $each["phone"];
            $customer->email = $each["email"];
            array_push($customerArray, $customer);
        }
        return $customerArray;
    }
    public function createCustomer()
    {
        $con = $this->connect();
        $sql = "INSERT INTO customers(name,gender,phone,email) VALUES ('$this->name',$this->gender,'$this->phone','$this->email')";
        // echo $sql;
        mysqli_query($con, $sql);
        $this->close($con);
    }
}
