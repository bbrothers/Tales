<?php namespace Tales\Formatters;

class EchoFormatter implements Formatter
{
    public function format($data)
    {
        return array_shift(array_map(null, $data, $data));
    }
}
