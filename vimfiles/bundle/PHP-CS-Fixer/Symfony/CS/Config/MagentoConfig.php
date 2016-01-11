<?php

/*
 * This file is part of the PHP CS utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\CS\Config;

use Symfony\CS\Finder\MagentoFinder;

/**
 * @author Myke Hines <myke@webhines.com>
 */
class MagentoConfig extends Config
{
    public function __construct()
    {
        @trigger_error(
            sprintf('The "%s" class is deprecated. You should stop using it, as it will soon be removed in 2.0 version.', __CLASS__),
            E_USER_DEPRECATED
        );

        parent::__construct();

        $this->finder = new MagentoFinder();
    }

    public function getName()
    {
        return 'magento';
    }

    public function getDescription()
    {
        return 'The configuration for a Magento application';
    }
}
