<?php

class Product {
    private $name = "test";
    public $model = "Model Test";
    protected $sku = "SKU TEST";

    public function getName() {
        return $this->name;
    }

    public function getSku() {
        return $this->sku;
    }

    protected function getModel() {
        return $this->model;
    }
}