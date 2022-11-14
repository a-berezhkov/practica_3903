<?php

class VATaxType extends TaxType
{
    //$amount — сумма, из которой нужно вычесть налог
    public function calculateTaxFor($amount)
    {
        return $amount * 0.18;//возвращает размер налога
    }
}

?>