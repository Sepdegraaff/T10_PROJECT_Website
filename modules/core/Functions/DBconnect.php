<?php

namespace Sepde\T10ProjWebsite\Functions;

class DBconnect
{
    public function connection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project_t10";

        $conn = new \mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error)
        {
            die("Whoops...: " . $conn->connect_error);
        }

        return $conn;
    }
}