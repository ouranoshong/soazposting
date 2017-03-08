<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/2/16
 * Time: 1:43 PM
 */

namespace XYWL\SoazPosting;


interface RequestInterface
{
    public function getApiMethod();

    public function getWrapper();

    public function getHandleOptions();
}
