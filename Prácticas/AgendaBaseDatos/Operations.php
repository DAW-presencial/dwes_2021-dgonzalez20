<?php
class Operations
{
    private $conn;
    private $table_name = "Contactos";

    public $id;
    public $nombreContacto;
    public $apellido;
    public $telefonoContacto;
    public $hora_ceracion;

    public function _construct($tabla)
    {
        $this->conn = $tabla;
    }

    function insertarDatos()
    {
        /*De este modo damos formato a la fecha de creación */
        $this->hora_ceracion = date('-m-d H:i:s');

        $consulta = "INSERT INTO" . $this->table_name . "SET nombreContato =:nombreontato:nombreContato, telefonoContato =telefonoContato,hora_creacion=:hora_creacion,atualizacion=:atualizaion";
        $preparar_consulta=$this->conn->prepare($consulta);

        $consulta->binParam('nombreContacto', $this->nombreContacto);
        $consulta->binParam('apellido', $this->apellido);
        $consulta-> binParam('telefonoContacto', $this->telefonoContacto);
        $consulta-> binParam('hora_creacion', $this->hora_ceracion);

        if ($consulta->execute){
            return true;
        } else{
            $this->Error($consulta);
            return false;
        }
    }
     public function Boorar()
     {
         $consulta = "Delete INTO" . $this->table_name . "SET nombreContato =:nombreontato:nombreContato, telefonoContato =telefonoContato,hora_creacion=:hora_creacion,atualizacion=:atualizaion";
         $preparar_consulta = $this->conn->prepare($consulta);

         $consulta->binParam('nombreContacto', $this->nombreContacto);
         $consulta->binParam('apellido', $this->apellido);
         $consulta->binParam('telefonoContacto', $this->telefonoContacto);
         $consulta->binParam('hora_creacion', $this->hora_ceracion);

         if ($consulta->execute) {
             echo "la consulta se ha ejecutado correctamente";
         } else {
             echo "La consulta ha fallado";
         }
     }
     public function ActualizarDatos(){
         $this->hora_ceracion = date('-m-d H:i:s');

         $consulta = "UPDATE INTO" . $this->table_name . "SET nombreContato =:nombreontato:nombreContato, telefonoContato =telefonoContato,hora_creacion=:hora_creacion,atualizacion=:atualizaion";
         $preparar_consulta=$this->conn->prepare($consulta);
         $consulta->binParam('nombreContacto', $this->nombreContacto);
         $consulta->binParam('apellido', $this->apellido);
         $consulta->binParam('telefonoContacto', $this->telefonoContacto);
         $consulta->binParam('hora_creacion', $this->hora_ceracion);

    if ($consulta -> execute ()){
        return true;
    } else{
        return false;
    }
     }
}
?>