<?php

namespace Task2;

use TaxService;
use TaxTypes\IncomeTaxType;
use TaxTypes\ProgressiveTaxType;
use TaxTypes\VATaxType;

use TaxTypes\TaxType;

spl_autoload_register(/**
 * @param $class_name
 */ function ($class_name) {
    include $class_name . '.php';
});

class Bill
{
    private $amount;
    private $taxType;
    private $taxService;

    /**
     * @param float $amount
     * @param TaxType $taxType
     * @param TaxService $taxService
     */
    public function __construct(float $amount, TaxType $taxType, \TaxService $taxService)
    {
        $this->amount = $amount;
        $this->taxType = $taxType;
        $this->taxService = $taxService;
    }

    /**
     * достаем сумму уплоченых налогов и выводим её
     */
    public function payTaxes() {
        $tax = $this->taxType->amount;
        $this->taxService->payOut($tax);
    }
}

$taxServ = new TaxService();

/**
 * создаем счета через конструктор и добавляем в массив
 */
$bill1 = new Bill(100, new IncomeTaxType(1000), $taxServ);
$bill2 = new Bill(100, new ProgressiveTaxType(1000), $taxServ);
$bill3 = new Bill(100, new VATaxType(500), $taxServ);

$bills = array($bill1, $bill2, $bill3);

/**
 *  проходимся по массиву счетов и выводим количество уплоченых налогов
 */
foreach ($bills as $bill) {
    $bill->payTaxes();
}