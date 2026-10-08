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

    function formatPrice($precio)
    {
        return number_format($precio,2,",",".")."€";
    }

    function calculateIVA($precio, $iva = 21)
    {
        return ($precio * (1 + $iva / 100));
    }

    function getStock($productos)
    {
         return array_filter($productos, fn($producto) => $producto["stock"] > 0);
    }
?>