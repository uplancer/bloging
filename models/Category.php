<?php
  class Category {
    // DB Stuff
    private $conn;
    private $table = 'categories';

    public $id;
    public $name;
    public $created_at;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Categories
    public function read() {
      // Create Query
      $sql = 'SELECT id, name, created_at FROM ' . $this->table . ' ORDER BY created_at DESC';

      // Prepare statement
      $stmt = $this->conn->prepare($sql);

      // Execute Query
      $stmt->execute();

      return $stmt;
    }
  }