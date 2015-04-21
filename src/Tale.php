<?php namespace Tales;

use Tales\Orderers\Orderer;
use Tales\Formatters\Formatter;

class Tale
{
    protected $lyrics = [
        'the horse and the hound and the horn that belonged to',
        'the farmer sowing his corn that kept',
        'the rooster that crowed in the morn that woke',
        'the priest all shaven and shorn that married',
        'the man all tattered and torn that kissed',
        'the maiden all forlorn that milked',
        'the cow with the crumpled horn that tossed',
        'the dog that worried',
        'the cat that chased',
        'the rat that ate',
        'the cheese that lay in',
        'the house that Jack built',
    ];

    public function __construct(Orderer $orderer, Formatter $formatter)
    {
        $this->lyrics = (new $orderer)->order($this->lyrics);
        $this->formatter = $formatter;
    }

    public function recite()
    {

        $tale = [];
        for ($i = 0, $len = count($this->lyrics); $i < $len; $i++) {
            $tale[] = $this->line($i);
        }

        return implode(PHP_EOL, $tale);
    }

    public function line($number)
    {
        return 'This is ' . implode(' ', $this->phrase($number)) . '.';
    }

    public function phrase($number)
    {

        $phrase = array_slice($this->lyrics, ($number + 1) * -1, $number + 1);

        return $this->formatter->format($phrase);
    }
}
