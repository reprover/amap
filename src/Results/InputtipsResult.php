<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/11
 * Time: 09:46
 */

namespace Reprover\Amap\Results;


use Reprover\Amap\Support\Result;

class InputTipsResult extends Result
{

    protected function setData()
    {
        return $this->original->tips;
    }
}