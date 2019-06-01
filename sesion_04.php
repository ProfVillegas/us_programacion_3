<?php

class name_class{
    //Atributos
    public $marca="null";
    public $anio=0;
    public $color="sin color";
    public $pantente=null;
    
    //Métodos
    
    public function __construct($m,$a,$c,$p){
        $this->marca=$m;
        $this->anio=$a;
        $this->color=$c;
        $this->patente=$p;
    }
    
    public function imprimir($style="ul",$advise="b"){
        echo "<{$style}>";
        echo "<li>{$this->marca}</li>";
        echo "<li>{$this->patente}</li>";
        echo "</{$style}>";
        
        return "<{$advise}>Proceso realizado satisfactoriamente</{$advise}>";
    }
}
class CuentaCliente{
    private $nombre;
    private $ap_paterno;
    private $ap_materno;
    private $tel;
    private $direccion;
    private $cp;
    
    public function __construct(){
        $this->nombre="sin datos";
        $this->ap_paterno="sin datos";
        $this->ap_materno="sin datos";
        $this->tel="sin datos";
        $this->direccion="sin datos";
        $this->cp="sin datos";
    }
    public function alta($nom,$ap_p,$ap_m,$t,$cp,$dir){
        $this->nombre=$nom;
        $this->ap_paterno=$ap_p;
        $this->ap_materno=$ap_m;
        $this->tel=$t;
        $this->direccion=$dir;
        $this->cp=$cp;
    }
    public function cliente(){
        echo "<ul>";
        echo "<li>{$this->nombre}</li>
        <li>{$this->ap_paterno}</li>";
        echo "</ul>";
    }
}
class CuentaCorriente extends CuentaCliente{
    private $numero;
    private $saldo;
    
    public function __construct(){
        parent::__construct();
        $this->numero="00000";
        $this->saldo="0.00";
    }
    
    public function crear_cuenta($n,$saldo,$nom,$ap_p,$ap_m,$t,$cp,$dir){
        $this->numero=$n;
        $this->saldo=$saldo;
        $this->alta($nom,$ap_p,$ap_m,$t,$cp,$dir);
    }
    public function depositar($deposito=0){
        $this->saldo+=$deposito;
    }
    
    public function girar($cuenta, $fondo){
        if($fondo<=$this->saldo){
            echo "<b>Transferencia en proceso para la cuenta {$cuenta} por una cantidad de {$fondo}</b><br>";
            $this->saldo-=$fondo;
        } else {
            echo "<b>Saldo insuficiente</b><br>";
        }
    }
    public function conocer_saldo(){
        if ($this->saldo<=0){
            echo "<b>Saldo insuficiente.</b><br>";
        } else{
            echo $this->cliente();
            echo "<b>El saldo de la cuenta {$this->numero} es de : {$this->saldo}</b><br>";
        }
    }
}

//Instanciar a la clase
/*$obj1=new name_class("Dodge","2013","Gris","ABD-1234");
echo $obj1->color;

echo $obj1->imprimir("ol","small");
*/
$user1=new CuentaCorriente();
$user1->crear_cuenta("41523132","3500","Eduardo","De la cruz","Jimenez","984","77723","Las Flores");
$user1->conocer_saldo();
$user1->girar("41524131","3700");
$user1->girar("41524131","1600");
$user1->depositar("200");
$user1->conocer_saldo();
?>