<?php
/**
 * Created by PhpStorm.
 * User: zhyunfe
 * Date: 2018/4/3
 * Time: 下午12:28
 */
class RecordProxy extends Record
{
    private $_isDirty = false;

    private $_isInitialized = false;

    public function __construct(array $data)
    {
        parent::__construct($data);
        if (count($data) > 0) {
            $this->_isDirty = true;
            $this->_isInitialized = true;
        }
    }

    public function __set($name, $value)
    {
        $this->_isDirty = true;
        parent::__set($name, $value); // TODO: Change the autogenerated stub
    }

    public function isDirty()
    {
        return $this->_isDirty;
    }
}