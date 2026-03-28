<?php

use Dotenv\Dotenv;

class Env {
    public static function load($path) {
        if (!file_exists($path . '/.env')) return;

        $dotenv = Dotenv::createImmutable($path);
        $dotenv->load();
    }
}