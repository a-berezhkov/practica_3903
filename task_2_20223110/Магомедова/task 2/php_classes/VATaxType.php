<?php
namespace php_classes;
class VATaxType
{
    public function set($amount){
        return $amount * 0.18;
    }
}