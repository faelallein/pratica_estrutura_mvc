<?php

namespace app\controller;

class ProductController
{

    public function Index()
    {
        echo "Padrão Product";
    }

    public function list($value = "")
    {

        echo "vem produto " . $value;
    }
}
