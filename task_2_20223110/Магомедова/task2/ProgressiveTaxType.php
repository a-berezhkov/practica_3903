<?php

namespace TaxTypes;

class ProgressiveTaxType extends TaxType
{
    public function ProgressiveTax($amount){
        if ($amount < 100000) {
            return $amount * 0.10;
        }
        else return $amount * 0.15;
    }

}