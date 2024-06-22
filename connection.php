<?php
class DatabaseConnection {
    private static $instance;
    private static $connectionPool = [];
    private static $maxConnections = 10;
    private $connection;
    private $host = "localhost";
    private $user = "root";
    private $password = "waterbilling101";
    private $db = "webdev";

    private function __construct() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    public static function releaseConnection($connection) {
        if (count(self::$connectionPool) < self::$maxConnections) {
            self::$connectionPool[] = $connection;
        } else {
            $connection->close();
        }
    }
}
