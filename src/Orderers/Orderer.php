<?php namespace Tales\Orderers;

interface Orderer
{
    /**
     * Order an array
     * @param  array|Traversable $data
     * @return array       re-ordered array
     */
    public function order($data);
}
