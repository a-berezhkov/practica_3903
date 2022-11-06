<?php

include_once "TaxTypes/TaxType.php";

include_once "TaxTypes/IncomeTaxType.php";

include_once "TaxTypes/VATaxType.php";

include_once "TaxTypes/ProgressiveTaxType.php";

include_once "TaxService.php";


class Bill
{
    private $taxType;
    private $taxService;


    public function __construct($taxType, $taxService)
    {

        $this->taxType = $taxType;
        $this->taxService = $taxService;
    }


    //Получаем сумму, из которой нужно вычесть налог, и выводим этот налог

    public function payTaxes() {
        $amountOfTax = $this->taxType->amount;
        $this->taxService->payOut($amountOfTax);
    }
}

$taxServiceObj = new TaxService();


$bill1 = new Bill(new IncomeTaxType(5000), $taxServiceObj);
$bill2 = new Bill(new ProgressiveTaxType(80000), $taxServiceObj);
$bill3 = new Bill(new ProgressiveTaxType(110000), $taxServiceObj);
$bill4 = new Bill(new VATaxType(10000), $taxServiceObj);


//Добавление объектов счетов в массив
$bills = array($bill1, $bill2, $bill3, $bill4);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Task 2</title>
</head>
<body>
    <div class="taxes">

        <?php
        foreach ($bills as $bill) {
        ?>

            <div class="tax">
                <p><?= $bill->payTaxes()?></p>
            </div>

        <?php
        }
        ?>

    </div>
</body>
</html>