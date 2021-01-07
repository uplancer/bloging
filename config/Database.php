<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  class Database {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'LAMPBlog';
    private $username = 'pmadmin';
    private $password = 'pmaroot';
    private $dsn;
    private $conn;

    // DB connect
    public function __construct() {
      $this->dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
      $this->conn = null;

      try {
        $this->conn = new PDO($this->dsn, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch (PDOException $e) {
        die('Connection Error:' . $e->getMessage());
      }

      return $this->conn;
    }
  }