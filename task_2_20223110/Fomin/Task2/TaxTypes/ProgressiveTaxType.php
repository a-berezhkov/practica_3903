<?php

namespace TaxTypes;

class ProgressiveTaxType extends TaxType
{
    /**
     * @param $amount - количество денех
     * @return float
     *
     * высчитываем налог и возвращаем (c условием)
     */
    public function calculateTaxFor($amount)
    {
        if ($amount < 100000) {
            return $amount * 0.10;
        }
        else return $amount * 0.15;
    }
}