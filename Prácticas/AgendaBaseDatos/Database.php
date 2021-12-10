<?php


class Database{
    private $host;
    private $db_name;
    private $username="root";
    private $password="";
    public $conn;

    /**
     * @return mixed
     * @author:Gonzalez Lastra David
     *function: Generar una función que gemere una conexión a la base de datos
     * En base a los datos establecidos, y genero un try catch donde mostramos un mensaje de error
     **/
    public function getConn(){
        try {
    $this->conn=new PDO("mysql:host={$this->host};dname {$this->db_name}",$this->username,$this->password);
        }catch (PDOException $exception){
            echo "La conexión ha sido erronea".$exception->getMessage();

        }
        return $this->conn;
    }

}