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

    function create($data){
        $sql = "INSERT INTO keyboards (name,type,layout,width,wireless)
                    VALUES (?,?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $name = $data['name'];
        $type = $data['type'];
        $layout = $data['layout'];
        $width = $data['width'];
        $wireless = $data['wireless'];
        $stmt->bind_param("sssss", $name, $type, $layout, $width, $wireless);
        $stmt->execute();
    }
}
?>