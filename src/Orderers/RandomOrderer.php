<?php namespace Tales\Orderers;

class RandomOrderer implements Orderer
{
    public function order($data)
    {
        shuffle($data);
        return $data;
    }
}
