<?php


class Database
{
    private $host = "localhost";
    private $db_name = "agenda_db_gonzalez_lastra_david";
    private $username = "dgonzalez_usr";
    private $password = "abc123.";

    public function _construuct()
    {
        //genero constructor vacio
    }

    public static function getConnection()
    {
        try {
            $conn=new PDO("ppgsql::host=" . Database::host . ";dbname=" . Database::dbname, Database::username, Database::password);
        }catch (PDOException $exception){
            echo "la conexión ha sido  erronia:".$exception->getMessage();
        }
    return $conn;

    }
}