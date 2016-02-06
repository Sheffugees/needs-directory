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
        $this->get('/{lang}', 'Sheffugees\\Controllers\\All::location');
        $this->get('/{lang}/choose', 'Sheffugees\\Controllers\\All::choose');
        $this->get('/{lang}/need/{need}', 'Sheffugees\\Controllers\\All::need');
        $this->get('/{lang}/results/{find}', 'Sheffugees\\Controllers\\All::results');

        $this->register(new \Silex\Provider\TwigServiceProvider(), [
            'twig.path' => __DIR__ . '/../views',
        ]);
    }
}
