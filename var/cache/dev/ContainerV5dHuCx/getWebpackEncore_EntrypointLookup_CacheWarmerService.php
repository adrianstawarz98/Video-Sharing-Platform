<?php

namespace ContainerV5dHuCx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebpackEncore_EntrypointLookup_CacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'webpack_encore.entrypoint_lookup.cache_warmer' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\CacheWarmer\EntrypointCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['webpack_encore.entrypoint_lookup.cache_warmer'] = new \Symfony\WebpackEncoreBundle\CacheWarmer\EntrypointCacheWarmer(['_default' => 'E:\\Video-Sharing-Platform/public/build/entrypoints.json'], ($container->targetDir.''.'/webpack_encore.cache.php'), ($container->privates['cache.webpack_encore'] ?? $container->getCache_WebpackEncoreService()));
    }
}
