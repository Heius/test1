<?php
class DatabaseModel
{
    public function connect()
    {
        $con = mysqli_connect("localhost", "root", "", "test1");
        return $con;
    }

    public function close($con)
    {
        mysqli_close($con);
    }
}
