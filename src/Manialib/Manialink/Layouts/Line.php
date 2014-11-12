<?php

namespace Manialib\Manialink\Layouts;

class Line extends AbstractLayout
{

    function preFilter(\Manialib\Manialink\Elements\Base $node)
    {
        
    }

    function postFilter(\Manialib\Manialink\Elements\Base $node)
    {
        $this->xIndex += $node->getRealSizenX() + $this->marginWidth;
    }

}
