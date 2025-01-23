<?php

namespace Sepde\T10ProjWebsite\Controllers;

use PDOException;
use RuntimeException;

class ScoreController extends BaseController
{
    public function getPlayerScores(): array
    {
        // Ensure connection is established
        if (!$this->conn) {
            throw new RuntimeException("Database connection not initialized");
        }

        try {
            // Define the SQL query
            $query = "SELECT player_id, player_number, score_value, score_date FROM PlayerScores";

            // Prepare and execute the query
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            // Fetch and return results
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Log the error (you could replace this with proper logging)
            error_log("Database query error: " . $e->getMessage());

            // Return an empty array in case of failure
            return [];
        }
    }
}