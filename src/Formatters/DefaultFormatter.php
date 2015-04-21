<?php namespace Tales\Formatters;

class DefaultFormatter implements Formatter
{
    public function format($data)
    {
        return $data;
    }
}
