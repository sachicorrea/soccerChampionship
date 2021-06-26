<?php 
    require_once "Connection.php";

    class Player extends Connection {
        public $document;
        public $name_player;
        public $position_id;
        public $team;

        public function save() {
            $this->open();
            $statement = $this->connection->prepare("INSERT INTO players VALUES(NULL, ?, ?, ?)");
            $statement->bindParam(1, $this->name_player);
            $statement->bindParam(2, $this->position_id);
            $statement->bindParam(3, $this->team);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }

        public function all() {
            $this->open();
            $statement = $this->connection->prepare("SELECT p.*, pp.name 'n_position', t.team_name 'n_team' FROM players p INNER JOIN player_position pp ON p.position_id = pp.position_id INNER JOIN teams t ON p.team = t.team_id;");
            $statement->setFetchMode(PDO::FETCH_OBJ); //Returns an object array
            $statement->execute();
            $players = $statement->fetchAll();
            $this->close();
            return $players;
        }

        public function find($id) {
            $this->open();
            $statement = $this->connection->prepare("SELECT * FROM players WHERE document=?");
            $statement->bindParam(1, $id);
            $statement->setFetchMode(PDO::FETCH_OBJ); //Returns an object array
            $statement->execute();
            $players = $statement->fetchAll();
            $this->close();
            return $players[0];
        }

        public function update() {
            $this->open();
            $statement = $this->connection->prepare("UPDATE players SET name_player=?, position_id=?, team=? WHERE document=?");
            $statement->bindParam(1, $this->name_player);
            $statement->bindParam(2, $this->position_id);
            $statement->bindParam(3, $this->team);
            $statement->bindParam(4, $this->document);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }

        public function delete() {
            $this->open();
            $statement = $this->connection->prepare("DELETE FROM players WHERE document=?");
            $statement->bindParam(1, $this->document);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }
    }
?>