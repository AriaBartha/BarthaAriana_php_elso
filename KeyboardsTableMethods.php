<?php
class KeyboardsTableMethods
{
    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "php_elso_dolgozat");
    }

    function getAll(){
        $sql = "SELECT * FROM keyboards";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>