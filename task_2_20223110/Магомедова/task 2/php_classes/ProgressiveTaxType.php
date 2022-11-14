<?php
namespace php_classes;
use TaxType;
class ProgressiveTaxType extends TaxType
{
    public function set($amount){
        if ($amount < 100000) {
            return $amount * 0.10;
        }
        else return $amount * 0.15;
    }

}