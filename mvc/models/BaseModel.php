<?php
class BaseModel
{
    protected $host;
    protected $dataBase;
    protected $user;
    protected $password;
    protected $conn;
    protected $table;
    function __construct() {
        $this->host = 'localhost';
        $this->dataBase = 'sinhvien';
        $this->user = 'root';
        $this->password = '';
    }
    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dataBase);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function getData() {
        $this->connect();
        $sql = "SELECT * FROM " . $this->table;
        $resultQuery = $this->conn->query($sql);
        $result = [];
        if ($resultQuery) {
            // output data of each row
            while($row = $resultQuery->fetch_assoc()) {
                $result[] = $row;
            }
        }
        return $result;
    }
}
?>