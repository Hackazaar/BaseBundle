## prod

````
new Symfony\Bundle\SecurityBundle\SecurityBundle(),
new Sonata\CoreBundle\SonataCoreBundle(),
new Sonata\BlockBundle\SonataBlockBundle(),
new Knp\Bundle\MenuBundle\KnpMenuBundle(),
new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
new Sonata\AdminBundle\SonataAdminBundle(),
new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
new Snc\RedisBundle\SncRedisBundle(),

## dev/test

````
new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),

