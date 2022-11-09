<?php

namespace TaxTypes;

class VATaxType extends TaxType
{
    /**
     * @param $amount - количество денех
     * @return float
     *
     * высчитываем налог и возвращаем
     */
    public function calculateTaxFor($amount)
    {
        return $amount * 0.13;
    }
}