<?php

/**
 * @file
 * Configured Silex application.
 */

namespace Sheffugees;

use Silex\Application;

/**
 * @class
 * ConfiguredSilex.
 */
class ConfiguredSilex extends Application
{
    /**
     * @inheritDoc
     *
     * Configure routes, services etc.
     */
    public function __construct(array $values = [])
    {
        parent::__construct($values);

        $this->get('/', 'Sheffugees\\Controllers\\All::index');

        $this->register(new \Silex\Provider\TwigServiceProvider(), [
            'twig.path' => __DIR__ . '/../views',
        ]);
    }
}
