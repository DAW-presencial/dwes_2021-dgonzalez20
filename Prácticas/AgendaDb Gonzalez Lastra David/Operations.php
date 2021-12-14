<?php
class Operations
{
    //Atributos de la base de datos
    public $id;
    public $nombre;
    public $apellido;
    public $direccion;
    public $correo;

    //genero constructor con parámetros, que son los atributos de la base de datos, y poosteriormente con el $this accedo
    //a estos atributos
    public function _construct($nombre, $apellido, $direccion, $correo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->correo = $correo;

    }

    public function añadir_contacto()
    {
        //Con esta variable accedemos a la base de datos y conectamos con get Connenction de la clase
        //database
        $base_datos = Database::getConnection();
        $insertar_registro = $base_datos->prepare("insert into contaactos(nombre,apellido,direccion,correo) values(?,?,?,?");
        $insertar_registro->execute($this->nombre, $this->apellido, $this->direccion, $this->correo);
        echo "Tras optener los datos se ha añadido el nuevo contacto";
    }

    public function actualizar_contacto()
    {
        $base_datos = Database::getConnection();
        $actualizar_datos = "update contactos set direccion='$this->direccion',apellido='$this->apellido',correo '$this->correo' where id= '$this->id';";
        $base_datos->exec($actualizar_datos);
    }
}