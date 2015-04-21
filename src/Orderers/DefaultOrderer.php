<?php namespace Tales\Orderers;

class DefaultOrderer implements Orderer
{
    public function order($data)
    {
        return $data;
    }
}
