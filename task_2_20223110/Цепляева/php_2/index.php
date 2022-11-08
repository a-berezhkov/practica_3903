<?php
    class Bill {
        private $amount;
        private $taxType;
        private $taxService;
        
        public function __construct($amount, $taxType, $taxService) {
           $this->amount = $amount;
            $this->taxType = $taxType;
            $this->taxService = $taxService;
        }
        
        public function payTaxes() {
            // TODO вместо 0.0 посчитать размер налога исходя из TaxType
            $taxAmount = $this->taxType->calculateTaxFor($this->amount);
            $this->taxService->payOut($taxAmount);
        }
    }

    class TaxService {
        public function payOut($taxAmount) {
            echo sprintf("Уплачен налог в размере %d", $taxAmount),"<br>";
        }
    }

    class TaxType {
        public function calculateTaxFor($amount) {
            return 0.0;
        }
    }

    class IncomeTaxType extends TaxType{
        public function calculateTaxFor($amount) {
            return $amount*0.13;
        }
    }

    class VATaxType extends TaxType{
        public function calculateTaxFor($amount) {
            return $amount*0.18;
        }
    }

    class ProgressiveTaxType extends TaxType{
        public function calculateTaxFor($amount) {
            if ($amount<100000) {
                return $amount*0.1;  
            } else {
                return $amount*0.15; 
            }
        }
    }
    $taxService = new TaxService();
    $payments = array (
        new Bill(100, new TaxType(), $taxService),
        new Bill(100, new IncomeTaxType(), $taxService),
        new Bill(100, new VATaxType(), $taxService),
        new Bill(100000, new ProgressiveTaxType(), $taxService),
        new Bill(100, new ProgressiveTaxType(), $taxService),
    );
    for ($i = 0; $i <= count($payments)-1; ++$i) {

        $payments[$i]->payTaxes();
    }
?>