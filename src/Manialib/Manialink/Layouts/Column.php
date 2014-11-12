<?php

namespace Manialib\Manialink\Layouts;

class Column extends AbstractLayout
{

    function preFilter(\Manialib\Manialink\Elements\Base $node)
    {
        
    }

    function postFilter(\Manialib\Manialink\Elements\Base $node)
    {
        $this->yIndex -= $node->getRealSizenY() + $this->marginHeight;
    }

}
