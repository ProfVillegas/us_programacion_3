<?php
class Usuario{
    public $no_cliente;
    public $nombre;
    public $ap_parterno;
    public $ap_materno;
    public rfc;
    public $cuenta;
    
    function __construct(){
        $this->no_cuenta="100000";
        $this->nombre="Sin nombre";
        $this->ap_paterno="Sin apellido";
        $this->ap_materno="Sin apellido";
        $this->rfc="XXA-0000000";
        $this->cuenta=new Cuenta();        
    }
}

class Cuenta{
    public $n_cuenta;
    public $anaualidad;
    public $sucursal;
    
    function __construct(){
        $this->no_cuenta="100000";
        $this->anaualidad=0;
        $this->sucursal="Desconocida";
    }
}

?>