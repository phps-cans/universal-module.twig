<?php
namespace PSCS\Universal\Module;


use Interop\Container\ContainerInterface;
use Interop\Container\ServiceProvider;

class TwigServiceProvider implements ServiceProvider
{

    /**
     * Returns a list of all container entries registered by this service provider.
     *
     * - the key is the entry name
     * - the value is a callable that will return the entry, aka the **factory**
     *
     * Factories have the following signature:
     *        function(ContainerInterface $container, callable $getPrevious = null)
     *
     * About factories parameters:
     *
     * - the container (instance of `Interop\Container\ContainerInterface`)
     * - a callable that returns the previous entry if overriding a previous entry, or `null` if not
     *
     * @return callable[]
     */
    public function getServices()
    {
        return [
            "ViewsDirectory" => function(ContainerInterface $container) {
                return '';
            },
            \Twig_Loader_Filesystem::class=>function(ContainerInterface $container) {
                return new \Twig_Loader_Filesystem($container->get("ViewsDirectory"));
            },
            \Twig_Environment::class =>function(ContainerInterface $container) {
                return new \Twig_Environment($container->get(\Twig_Loader_Filesystem::class));
            }
        ];
    }
}