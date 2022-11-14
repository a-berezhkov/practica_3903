<?php

spl_autoload_register(function ($class_name){
    include $class_name. '.php';
});

//include_Once 'TaxService.php';
echo 'Hello!';
$echo = new TaxService();

$c = new Bill(123000, "VA", $echo);
$c1 = new Bill(1000, "Prog", $echo);
$c2 = new Bill(10000, "Income", $echo);

echo '<br> VA tax: ';$c->payTaxes();
echo '<br> Progress tax: ';
$c1->payTaxes();
echo '<br> Income tax: ';$c2->payTaxes();





