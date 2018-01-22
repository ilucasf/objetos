<?php


class cliente
 {
   public $nome;
   private $codigo;
 }

$a = new cliente();
$b = new cliente();

$a->nome   = "Rafael Cosentino";
$a->codigo = 1;
$b->nome   = "Jonas Hirata";
$b->codigo = 2;

echo "$a->nome \n";
echo "$a->codigo \n";
echo "$b->nome \n";
echo "$b->codigo \n";


class cartao
{
  public $numero;
  public $Validade;
}

$c = new cartao();
$d = new cartao();
$f = new cartao();

$c->numero = '1111111';
$c->Validade = '01/01/2013';
