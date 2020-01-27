<?php
    class DBConnection extends PDO {
        public $host = 'localhost';
        public $dbName = 'checkmate';
        public $userName = 'root';
        public $password = '';

        public function __construct() {
            $dsn = "mysql:host" . $this->host . ";dbname" . $this->dbName;

            try {
                parent::__construct($dsn, $this->username);
                return 'connected';
            } catch(Exception $e) {
                return 'An error occured';

            }
        }
    }

?>