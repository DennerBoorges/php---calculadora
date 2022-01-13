<?php

$nro1 = $_POST['nro1'];
$nro2 = $_POST['nro2'];
$op = $_POST['op'];

if ($op == "+")
{
    $soma = $nro1 + $nro2;
    echo $soma;
}

if ($op == "-")
{
    $sub = $nro1 - $nro2;
    echo $sub;
}

if ($op == "*")
{
    $mult = $nro1 * $nro2;
    echo $mult;
}

if ($op == "/")
{
    $div = $nro1 / $nro2;
    echo $div;
}

if ($op != "+" && $op != "-" && $op != "*" && $op != "/")
{
    echo "Operador Inválido";
}
?>