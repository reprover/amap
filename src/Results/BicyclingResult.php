<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/8
 * Time: 15:17
 */

namespace Reprover\Amap\Results;


use Reprover\Amap\Support\Result;
use Reprover\Amap\Traits\HasErrCode;

class BicyclingResult extends Result
{
    use HasErrCode;

    protected function setData()
    {
        return $this->original->data->paths;
    }

}