<?php


 function autoload_bf27e8b6c8de62e5f1da4bf3ea588ae9($class)
{
    $classes = array(
        'XYWL\SoazPosting\Base\SoazPostingService' => __DIR__ .'/SoazPostingService.php',
        'XYWL\SoazPosting\Base\createSoazOrder' => __DIR__ .'/createSoazOrder.php',
        'XYWL\SoazPosting\Base\createSoazOrderResponse' => __DIR__ .'/createSoazOrderResponse.php',
        'XYWL\SoazPosting\Base\getSoazAddressPack' => __DIR__ .'/getSoazAddressPack.php',
        'XYWL\SoazPosting\Base\getSoazAddressPackResponse' => __DIR__ .'/getSoazAddressPackResponse.php',
        'XYWL\SoazPosting\Base\ApiRequestObjectSoaz' => __DIR__ .'/ApiRequestObjectSoaz.php',
        'XYWL\SoazPosting\Base\Api30Request' => __DIR__ .'/Api30Request.php',
        'XYWL\SoazPosting\Base\ApiResponseObject' => __DIR__ .'/ApiResponseObject.php',
        'XYWL\SoazPosting\Base\Api30' => __DIR__ .'/Api30.php',
        'XYWL\SoazPosting\Base\Api31Request' => __DIR__ .'/Api31Request.php',
        'XYWL\SoazPosting\Base\Api31' => __DIR__ .'/Api31.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_bf27e8b6c8de62e5f1da4bf3ea588ae9');

// Do nothing. The rest is just leftovers from the code generation.
{
}
