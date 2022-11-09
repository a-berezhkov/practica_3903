<?php
class Bill {
        private $amount;
        private $taxType;
        private $taxService;

        public function Bill($amount, $taxType, $taxService) {
        $this->amount = $amount;
        $this->taxType = $taxType;
        $this->taxService = $taxService;
    }

        public function payTaxes () {
        $taxAmount=$this->taxType->amount;
        $this->taxService->payOut($taxAmount);
    }
}
class TaxService {
        public function payOut($taxAmount) {
            print ("Уплачен налог в размере:" .$taxAmount);
        }
}
class TaxType {
        public function __construct($amount)
        {
            $this->amount = $this->calculateTaxFor($amount);
        }

    public function calculateTaxFor($amount) {
            return $amount;
        }
}
class IncomeTaxType extends TaxType {
        public function calculateTaxFor($amount) {
            return $amount*0.13;
        }
}
class VATaxType extends TaxType {
    public function calculateTaxFor($amount) {
        return $amount*0.18;
    }
}
class ProgressiveTaxType extends TaxType
{
    public function calculateTaxFor($amount)
    {
        if ($amount < 100000) {
            return $amount*0.1;
        } else {
            return $amount*0.15;
        }
    }
}
        $allTaxes = [];
        $taxService = new TaxService();
        $payments = [new Bill(100000,new ProgressiveTaxType(100000), $taxService),new Bill(12222,new IncomeTaxType(12222), $taxService) ];

        for ($i = 0; $i < count($payments); ++$i) {
            $bill = $payments[$i];
            $bill->payTaxes();
        }