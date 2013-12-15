<?php

namespace CL\Chill\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CLChillUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
