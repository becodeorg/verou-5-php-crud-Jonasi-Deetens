<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class BeyBladeRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {

    }

    // Get one
    public function find(): array
    {

    }

    // Get all
    public function get(): array
    {
        try {
            $query = "SELECT * FROM beyblades";
            $statement = $this->databaseManager->connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
        
            return $result;
        
        } catch (PDOException $e) {
            // Handle any database errors
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    public function update(): void
    {

    }

    public function delete(): void
    {

    }

}