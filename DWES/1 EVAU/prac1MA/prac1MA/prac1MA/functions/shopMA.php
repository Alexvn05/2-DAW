<?php
    $productos = [
        'prod1' => [
            'nombre' => 'portátil gaming',
            'precio' => 899.99,
            'stock' => 15,
            'categoria' => 'electrónica'
        ],
        'prod2' => [
            'nombre' => 'mesa escritorio',
            'precio' => 120.50,
            'stock' => 8,
            'categoria' => 'hogar'
        ],
        'prod3' => [
            'nombre' => 'ratón inalámbrico',
            'precio' => 25.99,
            'stock' => 0,
            'categoria' => 'electrónica'
        ]
    ];

    function formatPrice($price)
    {
        return number_format($price, 2, ",", ".") . " €";
    }

    function calculateIVA($price, $ivaPercent = 21)
    {
        return $price + $price * $ivaPercent / 100;
    }

    function getStock($products)
    {
        return array_filter($products, fn($product) => $product["stock"] > 0);
    }

    function getStockClass($stock)
    {
        if ($stock > 10)
        {
            return "stock--alto";
        }
        if ($stock > 0)
        {
            return "stock--medio";
        }
        return "stock--agotado";
    }
?>
