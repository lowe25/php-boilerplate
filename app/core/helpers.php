<?php

function view($template, $data = []) {
    View::render($template, $data);
}

// URL for the CSS and JavaScript
function base_url($path = '') {
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    return $base . '/' . ltrim($path, '/');
}