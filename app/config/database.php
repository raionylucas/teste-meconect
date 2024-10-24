<?php

class Database
{
    private $host = 'database';
    private $db_name = 'test_meconect';
    private $username = 'raiony';
    private $password = 'raiony';
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=$this->host; dbname=$this->db_name, $this->username, $this->password");
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Erro de conexão:" . $exception->getMessage();
        }

        return $this->conn;
    }
}
