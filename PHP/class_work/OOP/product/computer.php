<?php

/**
 * Created by PhpStorm.
 * User: timon
 * Date: 17.05.2017
 * Time: 20:34
 */
class Computer extends Product
{

    public function getName()
    {

        return $this->sku;
    }

}