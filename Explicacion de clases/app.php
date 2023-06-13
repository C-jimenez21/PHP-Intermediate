<?php
    declare(strict_types=1);
    class Humano{
        public $color;
        private $huella;
        protected $alias;
        protected $saludar;
        public function __construct($color, $huella, $alias)/*__construct(public string $color, private float $huella, protected string $alias){}-se puede borrar los this y las declaraciones anteriores-*/{
            $this -> color = $color;
            $this -> huella = $huella;
            $this -> alias = $alias;
        }
        protected function saludar(){
            return "Hola mi alias es: ".$this->alias;
        }
        //modificadores de acceso get and set
        public function __set(string $name, mixed $value){
            $this -> {$name} = $value;
        }
        public function __get(string $name)
        {
            return (method_exists($this, $name)) ? $this->{$name}()  : $this->{$name} ; //lo que hace es que valida si el metodo existe dentro de la clase, si existe lo ejecuta con los parentesis y si no, lo toma como un atributo.

            /*if(method_exists($this, $name)){
                return $this->{$name}();
            }else{
                return $this->{$name};
            }*/
        }
    }
    $extruct = array(
        "huella" => 12.15,
        "color" => "Piel",
        "alias" => "Trainer"
    );
    $obj = new Humano("piel",12.355, "Trainer");
    $obj2 = new Humano(...$extruct);
    $obj ->__set("alias", "TRAINER");
    echo "<pre>";
    print_r($obj);
    print_r($obj2);
    print_r($obj->__get("alias"));
    echo "<br>";
    print_r($obj->__get("saludar"));
    echo "</pre>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: black; color: white">
    
</body>
</html>