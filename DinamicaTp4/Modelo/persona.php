<?php
require_once __DIR__ . '/conector/BaseDatos.php';
class Persona
{
    private $nrodni;
    private $apellido;
    private $nombre;
    private $fechanac;
    private $telefono;
    private $domicilio;
    private $mensajeoperacion;

    public function __construct()
    {
        $this->nrodni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechanac = "";
        $this->telefono = "";
        $this->domicilio = "";
        $this->mensajeoperacion = "";
    }

    public function setear($dni, $apellido, $nombre, $fecha, $tel, $domi)
    {
        $this->setNroDni($dni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fecha);
        $this->setTelefono($tel);
        $this->setDomicilio($domi);
    }

    // Getters y Setters
    public function getNroDni()
    {
        return $this->nrodni;
    }
    public function setNroDni($valor)
    {
        $this->nrodni = $valor;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($valor)
    {
        $this->apellido = $valor;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($valor)
    {
        $this->nombre = $valor;
    }

    public function getFechaNac()
    {
        return $this->fechanac;
    }
    public function setFechaNac($valor)
    {
        $this->fechanac = $valor;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($valor)
    {
        $this->telefono = $valor;
    }

    public function getDomicilio()
    {
        return $this->domicilio;
    }
    public function setDomicilio($valor)
    {
        $this->domicilio = $valor;
    }

    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }
    public function setmensajeoperacion($valor)
    {
        $this->mensajeoperacion = $valor;
    }

    /** 
     * Buscar una persona por DNI
     */
    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear(
                        $row['NroDni'],
                        $row['Apellido'],
                        $row['Nombre'],
                        $row['fechaNac'],
                        $row['Telefono'],
                        $row['Domicilio']
                    );
                    $resp = true;
                }
            }
        } else {
            $this->setmensajeoperacion("Persona->cargar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Insertar nueva persona
     */
    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) 
                VALUES('" . $this->getNroDni() . "','" . $this->getApellido() . "','" . $this->getNombre() . "','" . $this->getFechaNac() . "','" . $this->getTelefono() . "','" . $this->getDomicilio() . "');";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Persona->insertar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Persona->insertar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Modificar persona
     */
    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE persona SET 
                    Apellido='" . $this->getApellido() . "', 
                    Nombre='" . $this->getNombre() . "', 
                    fechaNac='" . $this->getFechaNac() . "', 
                    Telefono='" . $this->getTelefono() . "', 
                    Domicilio='" . $this->getDomicilio() . "' 
                WHERE NroDni='" . $this->getNroDni() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Persona->modificar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Persona->modificar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Eliminar persona
     */
    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM persona WHERE NroDni='" . $this->getNroDni() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Persona->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Persona->eliminar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Listar personas
     */
    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona ";
        if ($parametro != "") {
            $sql .= "WHERE " . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $obj = new Persona();
                    $obj->setear(
                        $row['NroDni'],
                        $row['Apellido'],
                        $row['Nombre'],
                        $row['fechaNac'],
                        $row['Telefono'],
                        $row['Domicilio']
                    );
                    array_push($arreglo, $obj);
                }
            }
        }
        return $arreglo;
    }
}
