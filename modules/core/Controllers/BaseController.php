<?php

namespace Sepde\T10ProjWebsite\Controllers;

use Sepde\T10ProjWebsite\Functions\DBconnect;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

abstract class BaseController
{
    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(getcwd() . '/../resources/views/');
        $this->twig = new Environment($loader, []);
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function render(string $template, array $arguments = []): void
    {
        echo $this->twig->render($template, $arguments);
    }

    public function getConnection(): ?\mysqli
    {
        return (new DBconnect())->connection();
    }
}