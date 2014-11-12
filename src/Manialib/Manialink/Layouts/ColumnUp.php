<?php

namespace Manialib\Manialink\Layouts;

class ColumnUp extends AbstractLayout
{

    function preFilter(\Manialib\Manialink\Elements\Base $node)
    {
        $this->yIndex += $node->getRealSizenY() + $this->marginHeight;
    }

    function postFilter(\Manialib\Manialink\Elements\Base $node)
    {
        
    }

}
