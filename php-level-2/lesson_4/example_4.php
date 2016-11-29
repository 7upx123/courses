<?php
class A
{
	function Test() { echo 'Это класс A<br />'; }
	function Call() { $this->Test(); }
}

class B extends A
{
	function Test() { echo 'Это класс B<br />'; }
}

$a = new A();
$b = new B();

$a->Call(); // А
$b->Test(); // Б

$b->Call();	// ?
