<?php

namespace Recouvrement\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RecouvrementUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
