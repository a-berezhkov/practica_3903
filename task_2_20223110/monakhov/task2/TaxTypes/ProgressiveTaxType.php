<?php


class ProgressiveTaxType extends TaxType
{
    //$amount — сумма, из которой нужно вычесть налог
    public function calculateTaxFor($amount)
    {
        if ($amount <= 100000) {
            return $amount * 0.10;//если сумма меньше или равна 100000, то возвращает размер налога 10%
        }
        else return $amount * 0.15;//если сумма больше 100000, то возвращает размер налога 15%
    }
}

?>