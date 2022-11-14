<?php
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

    public function __construct($amount, $taxType, TaxService $taxService) {
        $this->amount = $amount; //кол-во денег
        $this->taxService = $taxService; //вывод в консоль?
        switch($taxType)
        {
            case "Income" :
                $n = new \php_classes\IncomeTaxType();
                $this->taxType = $n->set($this->amount);
                break;
            case "VA" :
                $n = new \php_classes\VATaxType();
                $this->taxType = $n->set($this->amount);
                break;
            case "Prog" :
                $n = new \php_classes\ProgressiveTaxType();
                $this->taxType = $n->set($this->amount);
                break;
            default :
                echo "Вы не добавили тип налога!!";
                break;
        }
        //$this->taxType = $taxType; //тип налога
    }

    public function payTaxes() {

        $this->taxService->payOut($this->taxType);
    }
}