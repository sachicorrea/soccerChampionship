<?php 
    abstract class Connection {
        protected $connection;

        public function open(){
            try {
                $this->connection = new PDO("mysql:host=localhost;dbname=tournament2026692", "root", "eight8einstein&");
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return "1"; 
            }
            catch(PDOException $e) {
                return $e->getMessage();
            }
        }

        public function close(){
            $this->connection = null;
        }

        abstract public function save();
        abstract public function all();
        abstract public function find($id);
        abstract public function update();
        abstract public function delete();
    }
?>