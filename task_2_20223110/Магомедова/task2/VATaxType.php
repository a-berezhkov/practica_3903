<?php

namespace TaxTypes;

class VATaxType
{
    public function VATax($amount){
        return $amount * 0.18;
    }
}