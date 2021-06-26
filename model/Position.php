<?php 
    require_once "Connection.php";

    class Position extends Connection {

        public $position_id;
        public $name;

        public function save() {
            $this->open();
            $statement = $this->connection->prepare("INSERT INTO player_position VALUES(null, ?)");
            $statement->bindParam(1, $this->name);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }

        public function all() {
            $this->open();
            $statement = $this->connection->prepare("SELECT * FROM player_position");
            $statement->setFetchMode(PDO::FETCH_OBJ); //Returns an object array
            $statement->execute();
            $position = $statement->fetchAll();
            $this->close();
            return $position;
        }

        public function find($position_id) {
            $this->open();
            $statement = $this->connection->prepare("SELECT * FROM player_position WHERE position_id=?");
            $statement->bindParam(1, $position_id, PDO::PARAM_INT);
            $statement->setFetchMode(PDO::FETCH_OBJ); //Returns an object array
            $statement->execute();
            $positions = $statement->fetchAll();
            $this->close();
            return $positions[0];
        }

        public function update() {
            $this->open();
            $statement = $this->connection->prepare("UPDATE player_position SET name=? WHERE position_id=?");
            $statement->bindParam(1, $this->name);
            $statement->bindParam(2, $this->position_id);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }

        public function delete() {
            $this->open();
            $statement = $this->connection->prepare("DELETE FROM player_position WHERE position_id=?");
            $statement->bindParam(1, $this->position_id);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }
    }
?>