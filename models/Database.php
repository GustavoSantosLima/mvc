<?php 

class Database
{
    private $db = 'mysql';
    private $host = 'localhost';
    private $port = '3306';
    private $username = 'root';
    private $password = '';
    private $database = 'test';

    public function connect()
    {
        $this->db = $_ENV['DB_CONNECTION'] ?? $this->db;
        $this->host = $_ENV['DB_HOST'] ?? $this->host;
        $this->port = $_ENV['DB_PORT'] ?? $this->port;
        $this->username = $_ENV['DB_USERNAME'] ?? $this->username;
        $this->password = $_ENV['DB_PASSWORD'] ?? $this->password;
        $this->database = $_ENV['DB_DATABASE'] ?? $this->database;

        try {
            $connection = "$this->db:host=$this->host;dbname=$this->database;port=$this->port";
            $pdo = new PDO($connection, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}