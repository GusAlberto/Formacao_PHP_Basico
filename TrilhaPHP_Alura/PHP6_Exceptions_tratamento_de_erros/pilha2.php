<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException $problema) {
        echo 'Na função 1, eu resolvi o problema da função 2' . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    /*
     Colocando dados inválidos para travar a execução do programa
     E cair no Try catch  
     */
    $divisao = intdiv(5, 0);
    $arrayFixo = new SplFixedArray(size: 2);
    $arrayFixo[1] = 'Valor';


    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;