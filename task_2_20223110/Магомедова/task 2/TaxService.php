<?php

//Класс нологовой службы
class TaxService
{
    public function payOut($taxAmount) {
        printf("<br> Уплачен налог в размере %.2f рублей", $taxAmount);
    }
}