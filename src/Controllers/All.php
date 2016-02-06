<?php

/**
 * @file
 * Controller for all pages in prototype.
 */

namespace Sheffugees\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * @class
 * All.
 */
class All
{
    /**
     * Callback: index, trying to choose language.
     */
    public function index(Request $request, Application $app)
    {
        return $app['twig']->render('index.twig');
    }
}
