<?php

namespace SynergySolarium\Service;

use Interop\Container\ContainerInterface;
use Solarium\Client;
use Laminas\ServiceManager\Factory\FactoryInterface;

/**
 * Solarium client factory
 *
 * @license MIT
 * @package SynergySolarium
 */
class SolariumFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $serviceLocator
     * @param string $requestedName
     * @param array|null $options
     *
     * @return Client
     */
    public function __invoke(ContainerInterface $serviceLocator, $requestedName, array $options = null)
    {
        $config = $serviceLocator->get('Configuration');
        return new Client(isset($config['solarium']) ? $config['solarium'] : array());
    }
}
