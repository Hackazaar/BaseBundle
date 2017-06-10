<?php

namespace Hackazaar\BaseBundle\Support;

class BundleResolver
{
    public static function handle(array &$bundles, $environment)
    {
        $existingBundleClasses = [];

        foreach ($bundles as $bundle) {
            $existingBundleClasses[] = get_class($bundle);
        }

        $newBundleClasses = array_diff(
            self::getBundleClasses($environment),
            $existingBundleClasses
        );

        foreach ($newBundleClasses as $bundleClass) {
            $bundles[] = new $bundleClass();
        }
    }

    public static function getBundleClasses($environment)
    {
        $bundleClasses = [
            \Symfony\Bundle\SecurityBundle\SecurityBundle::class,
            \Sonata\CoreBundle\SonataCoreBundle::class,
            \Sonata\BlockBundle\SonataBlockBundle::class,
            \Knp\Bundle\MenuBundle\KnpMenuBundle::class,
            \Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle::class,
            \Sonata\AdminBundle\SonataAdminBundle::class,
            \Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class,
        ];

        if (in_array($environment, ['dev', 'test'], true)) {
            $bundleClasses[] = \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle::class;
        }

        return $bundleClasses;
    }
}
