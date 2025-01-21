<?php

namespace Sepde\T10ProjWebsite\Controllers;

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class MainController extends BaseController
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function index(): void
    {
        $mainBgOne = "bg-gray-800";
        $mainBgTwo = "bg-gray-600";

        $this->render('home.twig', [
            'mainBgOne' => $mainBgOne,
            'mainBgtwo' => $mainBgTwo,
        ]);
    }
}