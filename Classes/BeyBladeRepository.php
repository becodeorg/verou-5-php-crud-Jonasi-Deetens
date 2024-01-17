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
        try {
            $query = "INSERT INTO beyblades (name, type, spin_direction, weight, attack_power, defense_power, stamina, special_move, bey_beast)
                        VALUES (:name, :type, :spin_direction, :weight, :attack_power, :defense_power, :stamina, :special_move, :bey_beast);";
            $statement = $this->databaseManager->connection->prepare($query);

            $statement->bindParam(":name", $_POST["name"]);
            $statement->bindParam(":type", $_POST["type"]);
            $statement->bindParam(":spin_direction", $_POST["spin_direction"]);
            $statement->bindParam(":weight", $_POST["weight"]);
            $statement->bindParam(":attack_power", $_POST["attack_power"]);
            $statement->bindParam(":defense_power", $_POST["defense_power"]);
            $statement->bindParam(":stamina", $_POST["stamina"]);
            $statement->bindParam(":special_move", $_POST["special_move"]);
            $statement->bindParam(":bey_beast", $_POST["bey_beast"]);

            $statement->execute();
        } catch (PDOException $e) {
            // Handle any database errors
            echo "Error: " . $e->getMessage();
        }
    }

    // Get one
    public function find($id): array
    {
        try {
            $query = "SELECT * FROM beyblades WHERE id = :id";
            $statement = $this->databaseManager->connection->prepare($query);

            $statement->bindParam(":id", $id);

            $statement->execute();
            $result = $statement->fetchAll();
        
            return $result;
        
        } catch (PDOException $e) {
            // Handle any database errors
            echo "Error: " . $e->getMessage();
            return [];
        }
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
        try {
            $query = "UPDATE beyblades 
                SET name = :name, 
                    type = :type, 
                    spin_direction = :spin_direction, 
                    weight = :weight, 
                    attack_power = :attack_power, 
                    defense_power = :defense_power, 
                    stamina = :stamina, 
                    special_move = :special_move, 
                    bey_beast = :bey_beast 
                WHERE id = :id"; 

            $statement = $this->databaseManager->connection->prepare($query);

            $statement->bindParam(":id", $_GET["id"]);
            $statement->bindParam(":name", $_POST["name"]);
            $statement->bindParam(":type", $_POST["type"]);
            $statement->bindParam(":spin_direction", $_POST["spin_direction"]);
            $statement->bindParam(":weight", $_POST["weight"]);
            $statement->bindParam(":attack_power", $_POST["attack_power"]);
            $statement->bindParam(":defense_power", $_POST["defense_power"]);
            $statement->bindParam(":stamina", $_POST["stamina"]);
            $statement->bindParam(":special_move", $_POST["special_move"]);
            $statement->bindParam(":bey_beast", $_POST["bey_beast"]);

            $statement->execute();
        } catch (PDOException $e) {
            // Handle any database errors
            echo "Error: " . $e->getMessage();
        }
    }

    public function delete($id): void
    {
        try {
            $query = "DELETE FROM beyblades WHERE id = :id";
            $statement = $this->databaseManager->connection->prepare($query);

            $statement->bindParam(":id", $id);

            $statement->execute();
        } catch (PDOException $e) {
            // Handle any database errors
            echo "Error: " . $e->getMessage();
        }
    }

}