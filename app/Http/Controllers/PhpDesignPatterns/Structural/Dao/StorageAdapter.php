<?php

/**
 * Created by PhpStorm.
 * User: zhyunfe
 * Date: 2018/4/3
 * Time: 下午3:33
 */
class StorageAdapter
{
    private $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function find($id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
}