<?php

class Database {
  private $db;
  function __construct($dbserver, $dbuser, $dbpass, $dbname) {
    $this->db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
  }
  function query($sql) {
    $sql = esca
  }
  function checkConnect() {
    if (!$this->db) {
      die("no connection");
    }
  }
}

