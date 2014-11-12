<?php

namespace Manialib\Manialink\Elements;

use Manialib\XML\Node;

class Timeout extends Node
{

    protected $nodeName = 'timeout';

    function __construct()
    {
        $this->setNodeValue(0);
    }

}
