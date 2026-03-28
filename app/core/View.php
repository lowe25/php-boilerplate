<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig\TwigFunction;

class View {
    public static function render($template, $data = []) {
        $loader = new FilesystemLoader(__DIR__ . '/../views');
        $twig = new Environment($loader);

        // Register base_url function
        $twig->addFunction(new TwigFunction('base_url', function ($path = '') {
            return base_url($path);
        }));

        echo $twig->render($template . '.twig', $data);
    }
} 