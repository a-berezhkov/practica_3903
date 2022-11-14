<?php

class IncomeTaxType extends TaxType
{
    //$amount — сумма, из которой нужно вычесть налог
    public function calculateTaxFor($amount)
    {
        return $amount * 0.13; //возвращает размер налога
    }
}

?>