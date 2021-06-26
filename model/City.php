<?php 
    require_once "Connection.php";

    class City extends Connection {
        public $id;
        public $name;

        public function save() {
            $this->open();
            $statement = $this->connection->prepare("INSERT INTO city VALUES(null, ?)");
            $statement->bindParam(1, $this->name);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }

        public function all() {
            $this->open();
            $statement = $this->connection->prepare("SELECT * FROM city");
            $statement->setFetchMode(PDO::FETCH_OBJ); //Returns an object array
            $statement->execute();
            $cities = $statement->fetchAll();
            $this->close();
            return $cities;
        }

        public function find($id) {
            $this->open();
            $statement = $this->connection->prepare("SELECT * FROM city WHERE id=?");
            $statement->bindParam(1, $id);
            $statement->setFetchMode(PDO::FETCH_OBJ); //Returns an object array
            $statement->execute();
            $cities = $statement->fetchAll();
            $this->close();
            return $cities[0];
        }

        public function update() {
            $this->open();
            $statement = $this->connection->prepare("UPDATE city SET name=? WHERE id=?");
            $statement->bindParam(1, $this->name);
            $statement->bindParam(2, $this->id);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }

        public function delete() {
            $this->open();
            $statement = $this->connection->prepare("DELETE FROM city WHERE id=?");
            $statement->bindParam(1, $this->id);
            $statement->execute();
            $rows = $statement->rowCount();
            $this->close();
            return $rows;
        }
    }
?>