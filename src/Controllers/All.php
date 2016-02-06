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
     * Page callback: welcome and pick language.
     */
    public function index(Request $request, Application $app)
    {
        return $app['twig']->render('start.twig');
    }

    /**
     * Page callback: set location.
     */
    public function location(Request $request, Application $app, $lang)
    {
        if (!preg_match("/^[a-z]{2}\$/", $lang)) {
            return $app->redirect('/');
        }

        return $app['twig']->render("location-$lang.twig");
    }

    /**
     * Page callback: choose a need.
     */
    public function choose(Request $request, Application $app, $lang)
    {
        if (!preg_match("/^[a-z]{2}\$/", $lang)) {
            return $app->redirect('/');
        }

        return $app['twig']->render("choose-$lang.twig");
    }

    /**
     * Page callback: define a need.
     */
    public function need(Request $request, Application $app, $lang, $need)
    {
        if (!preg_match("/^[a-z]{2}\$/", $lang)) {
            return $app->redirect('/');
        }

        if (!preg_match("/^[a-z]+\$/", $need)) {
            return $app->redirect('/');
        }


        return $app['twig']->render("need-$lang-$need.twig");
    }

    /**
     * Page callback: return some results.
     */
    public function results(Request $request, Application $app, $lang, $find)
    {
        if (!preg_match("/^[a-z]{2}\$/", $lang)) {
            return $app->redirect('/');
        }

        if (!preg_match("/^[a-z]+\$/", $find)) {
            return $app->redirect('/');
        }

        return $app['twig']->render("results-$lang-$find.twig");
    }

}
