<?php
//подоходный налоог
namespace php_classes;
class IncomeTaxType
{

    public function set($amount){
        return $amount * 0.13;
    }
}