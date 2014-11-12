<?php

namespace Manialib\Manialink\Layouts;

class LineRightToLeft extends AbstractLayout
{

    protected $init = false;

    function preFilter(\Manialib\Manialink\Elements\Base $node)
    {
        if (!$this->init && $this->getParent()) {
            $this->xIndex = $this->getParent()->getSizenX();
            $this->init   = true;
        }
        $marginWidth = $this->xIndex == $this->getParent()->getSizenX() ? 0 : $this->marginWidth;
        $this->xIndex -= $node->getRealSizenX() + $marginWidth;
    }

    function postFilter(\Manialib\Manialink\Elements\Base $node)
    {
        
    }

}
