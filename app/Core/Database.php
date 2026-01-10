<?php
// use PDO;
// use PDOException;

class Database
{
    private static $instance = null;
    private $connection;

    private string $host = "localhost";
    private string $user = "root";
    private string $password = "sqlyassine2025";
    private string $dbname = "TaskManagemrnt";

    private function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);            
        } catch (PDOException $e) {
            die("Problem in connection: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null)
            self::$instance = new self();
        return self::$instance;
    }
    public function getConnection(){return $this->connection;}
    private function __clone() { }
    public function __wakeup() { throw new Exception("Cannot instantiate abstract Task class");}
}