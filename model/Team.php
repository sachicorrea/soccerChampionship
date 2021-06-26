<?php 
    require_once "Connection.php";

    class Team extends Connection {
        public $team_id;
        public $team_name;
        public $manager;
        public $city_id;

        public function save() {
            $this->open();
            $statement = $this->connection->prepare("INSERT INTO teams VALUES(null, ?, ?, ?)");
            $statement->bindParam(1, $this->team_name);
            $statement->bindParam(2, $this->manager);
            $statement->bindParam(3, $this->city_id);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }

        public function all() {
            $this->open();
            $statement = $this->connection->prepare("SELECT teams.*, city.name AS n_city FROM city INNER JOIN teams ON teams.id = city.id");
            //$statement = $this->connection->prepare("SELECT * FROM teams");
            $statement->setFetchMode(PDO::FETCH_OBJ); //Returns an object array
            $statement->execute();
            $teams = $statement->fetchAll();
            $this->close();
            return $teams;
        }

        public function find($team_id) {
            $this->open();
            $statement = $this->connection->prepare("SELECT * FROM teams WHERE team_id=?");
            $statement->bindParam(1, $team_id);
            $statement->setFetchMode(PDO::FETCH_OBJ); //Returns an object array
            $statement->execute();
            $teams = $statement->fetchAll();
            $this->close();
            return $teams[0];
        }

        public function update() {
            $this->open();
            $statement = $this->connection->prepare("UPDATE teams SET team_name=?, manager=?, id=? WHERE team_id=?");
            $statement->bindParam(1, $this->team_name);
            $statement->bindParam(2, $this->manager);
            $statement->bindParam(3, $this->city_id);
            $statement->bindParam(4, $this->team_id);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }

        public function delete() {
            $this->open();
            $statement = $this->connection->prepare("DELETE FROM teams WHERE team_id=?");
            $statement->bindParam(1, $this->team_id);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }
    }
?>