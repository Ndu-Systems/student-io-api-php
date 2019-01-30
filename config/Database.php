<?php
class Database
{
    public function connect()
    {
        $conn = null;
        try {
            //$conn = new PDO('mysql:host=127.0.0.1;dbname=ndusys0_student_io_db','ndusys0_dok','Harder01!');
            $conn = new PDO('mysql:host=localhost;dbname=ndusys0_student_io_db', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo json_encode($e->getMessage()());
        }
        return $conn;
    }

}
?>