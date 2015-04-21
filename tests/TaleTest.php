<?php

use Tales\Tale;
use Tales\Orderers\DefaultOrderer;
use Tales\Formatters\DefaultFormatter;

class TaleTest extends PHPUnit_Framework_TestCase
{
    private $lyrics = "This is the house that Jack built.\nThis is the cheese that lay in the house that Jack built.\nThis is the rat that ate the cheese that lay in the house that Jack built.\nThis is the cat that chased the rat that ate the cheese that lay in the house that Jack built.\nThis is the dog that worried the cat that chased the rat that ate the cheese that lay in the house that Jack built.\nThis is the cow with the crumpled horn that tossed the dog that worried the cat that chased the rat that ate the cheese that lay in the house that Jack built.\nThis is the maiden all forlorn that milked the cow with the crumpled horn that tossed the dog that worried the cat that chased the rat that ate the cheese that lay in the house that Jack built.\nThis is the man all tattered and torn that kissed the maiden all forlorn that milked the cow with the crumpled horn that tossed the dog that worried the cat that chased the rat that ate the cheese that lay in the house that Jack built.\nThis is the priest all shaven and shorn that married the man all tattered and torn that kissed the maiden all forlorn that milked the cow with the crumpled horn that tossed the dog that worried the cat that chased the rat that ate the cheese that lay in the house that Jack built.\nThis is the rooster that crowed in the morn that woke the priest all shaven and shorn that married the man all tattered and torn that kissed the maiden all forlorn that milked the cow with the crumpled horn that tossed the dog that worried the cat that chased the rat that ate the cheese that lay in the house that Jack built.\nThis is the farmer sowing his corn that kept the rooster that crowed in the morn that woke the priest all shaven and shorn that married the man all tattered and torn that kissed the maiden all forlorn that milked the cow with the crumpled horn that tossed the dog that worried the cat that chased the rat that ate the cheese that lay in the house that Jack built.\nThis is the horse and the hound and the horn that belonged to the farmer sowing his corn that kept the rooster that crowed in the morn that woke the priest all shaven and shorn that married the man all tattered and torn that kissed the maiden all forlorn that milked the cow with the crumpled horn that tossed the dog that worried the cat that chased the rat that ate the cheese that lay in the house that Jack built.";

    /** @test */
    public function itRecitesTheTale()
    {
        $tale = new Tale(new DefaultOrderer, new DefaultFormatter);

        $this->assertEquals(
            $this->lyrics,
            $tale->recite()
        );
    }
}
