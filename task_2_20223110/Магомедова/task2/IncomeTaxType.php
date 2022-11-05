<?php
//подоходный налоог
namespace TaxTypes;

class IncomeTaxType
{
    public function IncomeTax($amount){
        return $amount * 0.13;
    }
}