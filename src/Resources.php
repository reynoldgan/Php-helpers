<?php
namespace Reynold\PhpHelpers;

class Resources
{
    public function resourceDataForList($data = [], $fields = [], $code = 2000, $msg = 'success')
    {
        return [
            'code'   => $code,
            'msg'    => $msg,
            'data'   => $data,
            'fields' => $fields
        ];
    }

    public function resourceExecFail($msg = 'fail')
    {
        return [
            'code' => 5000,
            'msg'  => $msg,
            'data' => []
        ];
    }

    public function say($words)
    {
        return $words;
    }
}

