<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/2/16
 * Time: 1:52 PM
 */

namespace XYWL\SoazPosting;


use XYWL\SoazPosting\Base\Api30Request;

class CreateSoazOrderRequest extends Api30Request implements RequestInterface
{
    public function getApiMethod()
    {
        return 'createSoazOrder';
    }

    public function getWrapper()
    {
        return "XYWL\\SoazPosting\\Base\\createSoazOrder";
    }

    public function getHandleOptions()
    {
        return ['trace' => 1];
    }

}
