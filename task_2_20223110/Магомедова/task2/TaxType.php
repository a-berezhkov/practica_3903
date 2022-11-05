<?php
//Типы налогов
namespace TaxTypes;
class TaxType
{
    public function calculateTaxFor($amount) {
        // TODO override me!
        return 0.0;
    }
}