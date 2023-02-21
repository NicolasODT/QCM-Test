<?php
class Database {
    private $db_host = '127.0.0.1';
    private $db_name = 'qcmTest';
    private $db_user = 'root';
    private $db_pass = '';
    private $dbo;

    public function __construct() {
        $this->dbo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
    }

    public function connection() {
        return $this->dbo;
    }
}