<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/2/16
 * Time: 2:28 PM
 */

namespace XYWL\SoazPosting;


use XYWL\SoazPosting\Base\Api31Request;

class GetSoazAddressPackRequest extends Api31Request implements RequestInterface
{

    public function getApiMethod()
    {
        return 'getSoazAddressPack';
    }

    public function getWrapper()
    {
        return "\\XYWL\\SoazPosting\\Base\\getSoazAddressPack";
    }

    public function getHandleOptions()
    {
        return ['trace' => 1];
    }
}
