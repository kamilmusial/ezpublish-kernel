<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformBehatBundle;

use eZ\Bundle\EzPublishDebugBundle\DependencyInjection\Compiler\DataCollectorPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Bundle used by Behat tests, only loaded in the behat env.
 */
class EzPlatformBehatBundle extends Bundle
{
}
