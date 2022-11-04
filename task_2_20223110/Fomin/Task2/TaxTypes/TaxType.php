<?php

namespace TaxTypes;

class TaxType
{
    public $amount;

    public function __construct($amount)
    {
        $this->amount = $this->calculateTaxFor($amount);
    }

    protected function calculateTaxFor($amount) {
        return 0.0;
    }
}