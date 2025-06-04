<!-- Código OOP: Este é um código simples que demostra a lógica de OOP !-->

<?php
// Classe principal
class Carro {
    public $modelo;

    public function __construct($modelo) {
        $this->modelo = $modelo;
    }

    public function acelerar() {
        echo "$this->modelo acelerou lentamente.<br>";
    }
}

// Classe secundária (heranças/polimorfismo)
class CarroEsportivo extends Carro {
    public function acelerar() {
        echo "$this->modelo acelerou rapidamente.<br>";
    }
}

// Classe secundária (2) (heranças/polimorfismo)
class CarroEletrico extends Carro {
    public function acelerar() {
        echo "$this->modelo acelerou silenciosamente.";
    }
}

// Objetos
$carro1 = new Carro("Fusca");
$carro2 = new CarroEsportivo("Ferrari");
$carro3 = new CarroEletrico("Tesla");

// Executando o Método
$carro1->acelerar();
$carro2->acelerar();
$carro3->acelerar();
?>