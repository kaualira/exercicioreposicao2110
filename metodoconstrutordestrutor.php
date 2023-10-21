<?php
    include("conta2class.php");

    // Criamos um objeto conta em $conta1, e no momento de sua criação
    // enviamos os parâmetros que o construtor precisa para preencher os respectivos atributos

    $conta1 = new Conta("Douglas Ribeiro", "0731","98765-21",400,"ativa");

    // executando os métodos 
    $conta1->Depositar(200);
    $conta1->Sacar(25);

    // Imprimindo o valor do saldo 

    echo 
        "Favorecido: " .$conta1->Cliente. "<br/>
                Conta: " .$conta1->Conta. "<br/>
                    Ag " .$conta1->Agencia. "<br/>
                Saldo: " .$conta1->ObterSaldo()."<br/>
                Status: " .$conta1->Status. "<br/>";
?>