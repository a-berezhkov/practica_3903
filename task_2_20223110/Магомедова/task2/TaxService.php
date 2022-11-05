<?php
namespace Main;
//Класс нологовой службы
class TaxService
{
    public function payOut($taxAmount) {
        printf("Уплачен налог в размере %.2f%n", taxAmount);
    }
}