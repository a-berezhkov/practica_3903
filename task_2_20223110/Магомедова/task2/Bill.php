<?php
namespace Main;
use TaxTypes\TaxType;
use Main\TaxService;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
class Bill
{
    private $amount;
    private $taxType;
    private $taxService;

    /* @param $amount
    /* @param $TaxType
    /* @param $taxService
     * */

    public function __construct($amount, TaxType $taxType, TaxService $taxService) {
        $this->amount = $amount;
        $this->taxType = $taxType;
        $this->taxService = $taxService;
    }

    public function payTaxes() {
        // TODO вместо 0.0 посчитать размер налога исходя из TaxType
    //double taxAmount = 0.0;

        $this->taxService->payOut(taxAmount);
    }
}