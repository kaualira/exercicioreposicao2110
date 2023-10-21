<!-- Método Contrutor
O Construtor é um método  (assim como o método Depositar, Sacar e ObterSaldo) executado toda vez que um objeto é instanciado a partir de uma classe. 
Gralmente é ultilizado para executar procedimentos de inicialização de atributos de um objeto. Quando é executado o comando $x = New... é automaticamente chamado o 
método construtor daquela classe.

Perceba que na classe Conta que criamo anteriormente, não criamos p tal método construtor, neste caso, as propriedades do objeto são inicializads com o 
valor NULL, daí a necessidade de atribuir valores a todas as propriedades (Cliente, Agencia, Conta e Saldo).

Método Destrutor
Também é um método especial e é executado sempre que atribuímos o valor NULL a um objeto ou quando ultilizamos a função unset() e em última instância, quando o 
programa é finalizado. Este método é comumente usado para apagar arquivos temporários, finalizar conexôes e etc. -->

<?php
    class Conta{

        public $Cliente;
        public $Agencia;
        public $Conta;
        public $Saldo;
        public $Status;

        // Método Construtor - Inicializa as propriedades 
        function __construct($Titular,$Agencia,$Conta,$Saldo,$Status)
        {
            $this->Cliente = $Titular;
            $this->Agencia = $Agencia;
            $this->Conta = $Conta;
            $this->Saldo = $Saldo;
            $this->Status = $Status;
            // Adicionei um status para mostrar o status da conta, que de acordo com o método, está ativa e não cancelada 
        }

        // Método Destrutor - Finaliza os objetos 
        function __destruct()
        {
            echo "<br/><small>O Objeto foi destruido.</samll>";
        }

        // Método Sacar() Diminui o saldo em quantia 
        function Sacar($quantia){
            if($quantia > 0){
                $this->Saldo -= $quantia;
            }
        }

        // Método Depositar() Deposita uma quantia, acrescentando o saldo 
        function Depositar($quantia){
            if ($quantia > 0) {
                $this->Saldo += $quantia;
            }
        }

        // Método ObterSaldo() Retorna o saldo da conta 
        function ObterSaldo(){
            return $this->Saldo;
        }


    }
?>