<?php

namespace Sepde\T10ProjWebsite\Functions;

use PDO;
use PDOException;

class DBconnect
{
    public function connection(): ?PDO
    {
        $serverName = "sepdegraaffserver.database.windows.net"; // Azure SQL Server Name
        $database = "Thema10";                                  // Database Name
        $username = "sepdegraaff";                              // Your Azure SQL User
        $password = "P@ssword";                                 // Your Azure SQL Password

        try {
            $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);

            // Set error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Return the connection object
            return $conn;
        } catch (PDOException $e) {
            // Handle connection error and return null
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}