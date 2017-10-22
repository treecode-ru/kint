<?php

namespace Kint\Renderer\Rich;

use Kint\Object\BasicObject;

class BlacklistPlugin extends Plugin implements ObjectPluginInterface
{
    public function renderObject(BasicObject $o)
    {
        return '<dl>'.$this->renderLockedHeader($o, '<var>Blacklisted</var>').'</dl>';
    }
}
